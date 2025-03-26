@extends('admins.layout')


@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">General Form</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Row-->
                <div class="row g-4">
                    <!--begin::Col-->
                    <div class="col-md-8">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Thêm mới sản phẩm</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="code" class="form-label">Mã sản phẩm</label>
                                    <input
                                        type="text"
                                        class="form-control @error('code') is-invalid @enderror"
                                        id="code"
                                        name="code"
                                        value="{{ $product->code }}"
                                    />
                                    @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ $product->name }}" id="name"/>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <h3>Biến thể</h3>
                                    <div id="variants-container">
                                        @foreach($product->productVariants as $key => $variant)
                                            <div class="variant-row row mb-3">
                                                <input type="hidden" name="variants[{{$key}}][variant_id]"
                                                       value="{{ $variant->id }}">
                                                <div class="col-md-3">
                                                    <label class="form-label">Tên biến thể</label>
                                                    <input type="text"
                                                           name="variants[{{$key}}][variant_attribute]"
                                                           class="form-control @error('variants.0.variant_attribute') is-invalid @enderror"
                                                           value="{{ $variant->variant_attribute }}">
                                                    @error('variants.0.variant_attribute')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Giá trị biến thể</label>
                                                    <input type="text" name="variants[{{$key}}][variant_value]"
                                                           class="form-control @error('variants.0.variant_value') is-invalid @enderror"
                                                           value="{{ $variant->variant_value }}">
                                                    @error('variants.0.variant_value')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Giá</label>
                                                    <input type="number" name="variants[{{$key}}][price]"
                                                           class="form-control @error('variants.0.price') is-invalid @enderror"
                                                           value="{{ $variant->price }}" min="0">
                                                    @error('variants.0.price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Giá khuyến mãi</label>
                                                    <input type="number"
                                                           name="variants[{{$key}}][discount_price]"
                                                           class="form-control @error('variants.0.discount_price') is-invalid @enderror"
                                                           value="{{ $variant->discount_price }}" min="0">
                                                    @error('variants.0.discount_price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label">Tồn kho</label>
                                                    <input type="number" name="variants[{{$key}}][stock]"
                                                           class="form-control @error('variants.0.stock') is-invalid @enderror"
                                                           value="{{ $variant->stock }}" min="0">
                                                    <button type="button"
                                                            class="btn btn-danger btn-sm mt-2 remove-variant">Xóa
                                                    </button>
                                                    @error('variants.0.stock')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="button" id="add-variant" class="btn btn-secondary mb-3">Thêm biến thể
                                    </button>
                                </div>
                                <div class="mb-3">
                                    <label for="technical_spec" class="form-label">Thông số kỹ thuật</label>
                                    <textarea name="technical_spec" id="technical_spec"
                                              class="form-control @error('technical_spec') is-invalid @enderror"
                                              rows="10">{!! $product->technical_specs !!}</textarea>
                                    @error('technical_spec')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Mô tả sản phẩm</label>
                                    <textarea name="description" id="description"
                                              class="form-control @error('description') is-invalid @enderror"
                                              rows="10">{!! $product->description !!}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Quick Example-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Thêm mới sản phẩm</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Ảnh chính</label>
                                    <input type="file" name="image" id="image"
                                           class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                    <div id="image-preview" class="preview-container">
                                        @if($product->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}"
                                                 alt="Preview"
                                                 style="width: 200px; height: 100px;">
                                        @endif
                                    </div>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description_media" class="form-label">Ảnh/Video mô tả (chọn
                                        nhiều)</label>

                                    <input type="file" name="description_media[]" id="description_media"
                                           class="form-control @error('description_media') is-invalid @enderror"
                                           multiple accept="image/*,video/mp4">
                                    <div id="description-media-preview" class="preview-container row">
                                        @if($product->productMedias->count())
                                            @foreach($product->productMedias as $item)
                                                @if($item->media_type == 'image')
                                                    <div class="preview-item col-md-6">
                                                        <img
                                                            src="{{ \Illuminate\Support\Facades\Storage::url($item->url) }}"
                                                            alt="Preview"
                                                            style="width: 200px; height: 100px;">
                                                    </div>

                                                @else
                                                    <div class="preview-item col-md-6">
                                                        <video controls
                                                               src="{{ \Illuminate\Support\Facades\Storage::url($item->url) }}"
                                                               alt="Preview"
                                                               style="width: 200px; height: 100px;"></video>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    @error('description_media')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_ids" class="form-label">Danh mục (giữ Ctrl để chọn
                                        nhiều)</label>
                                    <select name="category_ids[]" id="category_ids"
                                            class="form-control @error('category_ids') is-invalid @enderror" multiple>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @if($category->children->count())
                                                @include('admins.categories._select_options', ['children' => $category->children, 'level' => 1])
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_ids')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Thương hiệu</label>
                                    <select name="brand" class="form-control @error('brand') is-invalid @enderror"
                                            id="brand">
                                        <option value="">Choose brand</option>
                                        @foreach($brands as $item)
                                            <option
                                                value="{{ $item->id }}" @selected($item->id == $product->brand_id)>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tag" class="form-label">Tag (giữ Ctrl để chọn nhiều)</label>
                                    <select name="tags[]" class="form-control @error('tags') is-invalid @enderror"
                                            id="tag" multiple>
                                        @foreach($tags as $item)
                                            <option
                                                value="{{ $item->id }}" @selected(in_array($item->id, $product->tags->pluck('id')->toArray()))>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" @checked($product->is_active) class="form-check-input"
                                           name="is_active" value="1"
                                           id="is_active"/>
                                    <label class="form-check-label" for="is_active">Trạng thái hiển thị</label>
                                    @if ($errors->has('is_active'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('is_active') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Quick Example-->
                    </div>
                    <!--end::Col-->
                </div>
            </form>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
@section('lib-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('script')
    <script>

        // Xem trước ảnh chính
        $('#image').change(function () {
            $('#image-preview').empty();
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#image-preview').append(`<img src="${e.target.result}" alt="Preview" style="width: 200px; height: 100px;">`);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });


        $('#description_media').change(function () {
            const maxFiles = 5; // Giới hạn 5 file
            if (this.files.length > maxFiles) {
                alert(`Chỉ được chọn tối đa ${maxFiles} file!`);
                this.value = '';
                $('#description-media-preview').empty();
                return;
            }
            $('#description-media-preview').empty();
            if (this.files) {
                Array.from(this.files).forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const isVideo = file.type.startsWith('video');
                        const element = isVideo
                            ? `<video controls src="${e.target.result}" alt="Preview" style="width: 200px; height: 100px;"></video>`
                            : `<img src="${e.target.result}" alt="Preview"  style="width: 200px; height: 100px;">`;
                        $('#description-media-preview').append(`
                    <div class="preview-item col-md-6" data-index="${index}">
                        ${element}

                    </div>
                `);
                    };
                    reader.readAsDataURL(file);
                });
            }
        });

        let variantIndex = {{ $product->productVariants->count() }};

        $('#add-variant').click(function () {
            const newVariant = `
                <div class="variant-row row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Tên biến thể</label>
                        <input type="text" name="variants[${variantIndex}][variant_attribute]" class="form-control" value="">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Giá trị biến thể</label>
                        <input type="text" name="variants[${variantIndex}][variant_value]" class="form-control" value="">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Giá</label>
                        <input type="number" name="variants[${variantIndex}][price]" class="form-control" value="" min="0">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Giá khuyến mãi</label>
                        <input type="number" name="variants[${variantIndex}][discount_price]" class="form-control" value="" min="0">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Tồn kho</label>
                        <input type="number" name="variants[${variantIndex}][stock]" class="form-control" value="" min="0">
                        <button type="button" class="btn btn-danger btn-sm mt-2 remove-variant">Xóa</button>
                    </div>
                </div>`;
            $('#variants-container').append(newVariant);
            variantIndex++;
        });

        $(document).on('click', '.remove-variant', function () {
            $(this).closest('.variant-row').remove();
        });
    </script>
@endsection
