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
            <!--begin::Row-->
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-md-12">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Sửa sản phẩm</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{ route('admin.products.update', $product) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="code" class="form-label">Mã sản phẩm</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="code"
                                        name="code"
                                        value="{{ $product->code }}"
                                    />
                                    @if ($errors->has('code'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('code') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                                           id="name"/>
                                    @if ($errors->has('name'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="media[]" id="media" multiple/>
                                    <label class="input-group-text" for="media">Hình ảnh sản phẩm</label>
                                    @if ($errors->has('media'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('media') }}
                                        </div>
                                    @endif
                                </div>
                                <h3>Biến thể</h3>
                                @foreach($product->productVariants as $index => $variant)
                                    <div class="row mb-3">
                                        <input type="hidden" name="variants[{{ $index }}][id]" value="{{ $variant->id }}">
                                        <div class="col-md-6">
                                            <label class="form-label">Tồn kho (Biến thể {{ $index + 1 }})</label>
                                            <input type="number" name="variants[{{ $index }}][stock]" class="form-control @error('variants.' . $index . '.stock') is-invalid @enderror" value="{{ old('variants.' . $index . '.stock', $variant->stock) }}" min="0">
                                            @error('variants.' . $index . '.stock')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Giá (Biến thể {{ $index + 1 }})</label>
                                            <input type="number" name="variants[{{ $index }}][price]" class="form-control @error('variants.' . $index . '.price') is-invalid @enderror" value="{{ old('variants.' . $index . '.price', $variant->price) }}" min="0" step="1000">
                                            @error('variants.' . $index . '.price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mb-3">
                                    <label for="description" class="form-label">Mô tả sản phẩm</label>
                                    <textarea name="description" id="description" class="form-control"
                                              rows="10">{!! $product->description !!}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="technical_spec" class="form-label">Thông số kỹ thuật</label>
                                    <textarea name="technical_spec" id="technical_spec" class="form-control"
                                              rows="10">{!! $product->technical_spec !!}</textarea>
                                    @if ($errors->has(' technical_spec'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('technical_spec') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="category_ids" class="form-label">Danh mục (giữ Ctrl để chọn nhiều)</label>
                                    <select name="category_ids[]" id="category_ids" class="form-control @error('category_ids') is-invalid @enderror" multiple>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->categories->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                            @if($category->children->count())
                                                @include('admins.categories._select_options', ['children' => $category->children, 'level' => 1])
                                            @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('categories'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('categories') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Thương hiệu</label>
                                    <select name="brand" class="form-control" id="brand">
                                        <option value="">Choose brand</option>
                                        @foreach($brands as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('brand'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('brand') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="tag" class="form-label">Tag</label>
                                    <select name="tag[]" class="form-control" id="tag" multiple>
                                        @foreach($tags as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('tag'))
                                        <div class="form-text text-danger">
                                            {{ $errors->first('tag') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" @checked($product->is_active) class="form-check-input"
                                           name="is_active" value="1"
                                           id="is_active"/>
                                    <label class="form-check-label" for="is_active">Trạng thái hoạt động</label>
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
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
