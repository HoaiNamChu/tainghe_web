@extends('admins.layout')


@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Simple Tables</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Gía</th>
                                    <th>Tồn kho</th>
                                    <th>Trạng thái hoạt động</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $item)
                                    <tr class="align-middle">
                                        <td>{{ $key + 1}}</td>
                                        <td><img src="{{ $item->image }}" alt=""></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->formatted_price}} VND</td>
                                        <td>{{ number_format($item->total_stock) }}</td>
                                        <td>
                                            <input type="checkbox" @checked($item->is_active) name="" id="">
                                        </td>
                                        <td>
                                            <button class="btn btn-info">Xem</button>
                                            <a href="{{ route('admin.products.edit', $item) }}" class="btn btn-warning">Sửa</a>
                                            <button class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                {{ $data->links() }}
{{--                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
