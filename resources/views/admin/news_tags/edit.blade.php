@extends('admin.layouts.master')
@section('title'){{'Edit News Tag'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Tags tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood/admin/dashboard/">Dashboard</a></li>
                    <?php
                    $xem_sp = checkPer($user['id'], 'post_edit');
                    if ($xem_sp == true):

                        <li class="breadcrumb-item active">Sửa Tag</li>

                        <?php  endif; ?>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood/admin/newsTags/update/{{$tag->id}}" method="POST">
                        <div class="form-group">
                            <label for="newsTagNameUpdate">Tên:</label>
                            <input value="{{$tag->name}}" type="text" name="newsTagNameUpdate" class="form-control" id="newsTagNameUpdate">
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection