@extends('admin.layouts.master')
@section('title'){{'Edit News Category'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/productCategories/update/{{$category->id}}" method="POST">
                        <div class="form-group">
                            <label for="productCategoryNameUpdate">Tên:</label>
                            <input value="{{$category->name}}" type="text" name="productCategoryNameUpdate" class="form-control" id="productCategoryNameUpdate">
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection