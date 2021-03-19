@extends('admin.layouts.master')
@section('title'){{'Add News'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm tin tức</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/product/update/{{$product->id}}" method="POST"
                          enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="images">Ảnh sản phẩm</label>
                                <input type="file" name="images" class="form-control" id="images">
                            </div>
                            <div class="form-group">
                                <label for="name_product">Tên sản phẩm</label>
                                <input type="text" name="name_product" class="form-control" id="name_product">
                            </div>

                            <div class="form-group">
                                <label for="description_product">Mô tả:</label>
                                <input type="text" name="description_product" class="form-control" id="description_product">
                            </div>
                            <div class="form-group">
                                <label for="price_product">Giá</label>
                                <textarea type="text" name="price_product" class="form-control"
                                          id="price_product"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_product">Danh mục:</label>
                                <select name="category_product" id="category_product" class="form-control">
                                    <option value="0">Chọn làm danh mục cha:</option>
                                    {!! $html !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tag:</label>
                                @foreach ($tags as $key => $tag)
                                    <label style="display: inline-block; width: 100%;">
                                        <input style="margin-right: 5px" name="tags[]"
                                               @foreach ($productTags as $key => $productTag)
                                               @if ($product->id == $productTag->product_id)
                                               @if($tag->id == $productTag->tag_id)
                                               checked
                                               @endif
                                               @endif
                                               @endforeach
                                               type="checkbox" value="{{$tag->id}}">{{$tag->name}}
                                    </label>
                                @endforeach
                            </div>
                            <button class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection