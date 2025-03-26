<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::get()->toTree();


        return view('admins.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:categories|max:50',
            'parent_id' => 'nullable|exists:categories,id',
        ]);


        if ($request->parent_id) {

            $parent = Category::query()->findOrFail($request->parent_id);
            Category::create([
                'name' => request('name'),
                'slug' => Str::slug(request('name')),
            ], $parent);
            return redirect()->route('admin.categories.index');
        }


        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);


        return redirect()->route('admin.categories.index');


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
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '!=', $id)->get()->toTree(); // Loại danh mục đang chỉnh sửa
        return view('admins.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id|not_in:' . $id, // Không cho chọn chính nó làm cha
        ]);

        $category = Category::findOrFail($id);

        // Cập nhật tên
        $category->name = $request->name;

        // Xử lý parent_id
        if ($request->parent_id) {
            $newParent = Category::find($request->parent_id);

            // Kiểm tra xem parent mới có phải là con của danh mục hiện tại không
            if ($newParent->isDescendantOf($category)) {
                return redirect()->back()->withErrors(['parent_id' => 'Không thể chuyển danh mục thành con của chính con nó!']);
            }

            // Chuyển danh mục thành con của parent mới
            $category->appendToNode($newParent)->save();
        } else {
            // Nếu không có parent_id, chuyển thành danh mục gốc
            $category->makeRoot()->save();
        }

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Di chuyển các danh mục con lên cấp cao hơn (trở thành root)
        foreach ($category->children as $child) {
            $child->makeRoot()->save();
        }

        // Xóa danh mục cha
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa, các danh mục con được giữ lại!');
    }
}
