<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::query()->with('productVariants')->orderBy('is_active', 'DESC')->paginate(15);
        return view('admins.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $tags = Tag::all();
        $categories = Category::all()->toTree();
        return view('admins.products.create', compact('brands', 'tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'code' => 'required|unique:products|max:20',
            'name' => 'required|max:100',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
//            'description_media' => 'nullable|array|max:7', // Tối đa 7 file (6 ảnh + 1 video)
//            'description_media.*' => 'nullable|mimes:jpg,jpeg,png,webp,gif,mp4,webm,mov,avi,mkv|max:51200',
            'description' => 'nullable|string',
            'technical_spec' => 'nullable|string',
            'variants' => 'required|array|min:1',
            'variants.*.variant_attribute' => 'required|string|max:255',
            'variants.*.variant_value' => 'required|string|max:255',
            'variants.*.price' => 'required|integer|min:1000|max:1000000000',
            'variants.*.discount_price' => 'nullable|integer|min:1000|max:1000000000',
            'variants.*.stock' => 'required|integer|min:0',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|min:1',
            'brand' => 'nullable|integer|min:1',
            'tags' => 'nullable|array',
            'tags.*' => 'nullable|integer|min:1',
        ]);


        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'slug' => Str::slug($request->code),
            'description' => $request->description,
            'technical_specs' => $request->technical_spec,
            'brand_id' => $request->brand,
            'is_active' => $request->is_active ? 1 : 0,
        ];
        if ($request->image){
            $data['image'] = Storage::put('uploads',$request->image);
        }

        $product = Product::create($data);

        if ($product) {
            if ($request->categories != null) {
                $product->catagories()->attach($request->categories);
            }
            if ($request->tags != null) {
                $product->catagories()->attach($request->tags);
            }

            foreach ($request->variants as $variantData) {
                $product->productVariants()->create([
                    'variant_attribute' => $variantData['variant_attribute'],
                    'variant_value' => $variantData['variant_value'],
                    'price' => $variantData['price'],
                    'discount_price' => $variantData['discount_price'],
                    'stock' => $variantData['stock'],
                ]);
            }


            if (request()->hasFile('description_media')) {
                $uploadedFiles = ['images' => [], 'video' => null];

                foreach ($request->file('description_media') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $fileType = in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'webp', 'jfif']) ? 'image' : 'video';
                    $path = $file->store('uploads/' . ($fileType == 'image' ? 'images' : 'videos'), 'public');

                    // Lưu vào database
                    ProductMedia::create([
                        'product_id' => $product->id,
                        'file_name' => $fileName,
                        'file_path' => $path,
                        'file_type' => $fileType
                    ]);

                    $uploadedFiles[$fileType == 'image' ? 'images' : 'video'][] = $path;
                }
                dd($uploadedFiles);
            }

        }

        return redirect()->route('admin.products.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product = Product::query()
            ->with(['categories', 'tags', 'productMedias', 'productVariants'])
            ->findOrFail($id);
        $brands = Brand::all();
        $tags = Tag::all();
        $categories = Category::all()->toTree();
        return view('admins.products.edit', compact('product', 'brands', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
