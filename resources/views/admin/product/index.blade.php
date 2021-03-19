@if (!checkPer($_SESSION['user']['id'],'product_view'))
    @php(header('Location: /superFood/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Products'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý tin tức</li>
                    </ol>

                    <a href="/superFood/admin/product/create" class="btn btn-primary addBtn">Thêm danh mục

                    </a>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng danh mục
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Mô tả</th>
                                        <th>Giá</th>
                                        <th>Danh mục</th>
                                        <th>Tin tức</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td class="text-center"><img src="/superFood/uploads/{{ $product->images }}" alt="" width="100" height="100"></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                @foreach ($categories as $category)
                                                    @if ($product->category_id == $category->id)
                                                        {{$category->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($productTags as $productTag)
                                                    @if ($product->id == $productTag->product_id)
                                                        @foreach ($tags as $tag)
                                                            @if($tag->id == $productTag->tag_id)
                                                                {{$tag->name . ','}}
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </td>

                                            <td>

                                                <a class="btn btn-primary" href="/superFood/admin/product/edit/{{$product->id}}">Sửa</a>

                                                    <a class="btn btn-danger" href="/superFood/admin/product/delete/{{$product->id}}">Xóa</a>

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection