@extends('admin.layouts.master')
@section('title'){{'Add Product Category'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/productCategories/store" method="POST">
                        <div class="form-group">
                            <label for="productNameAdd">Tên:</label>
                            <input type="text" name="productNameAdd" class="form-control" id="productNameAdd">
                        </div>
                        <div class="form-group">
                            <select name="productCategoryAdd" id="productCategoryAdd" class="form-control">
                                <option value="0"><b>Chọn là danh mục cha:</b></option>
                                {!! $html !!}
                            </select>
                        </div>
                        <button class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection