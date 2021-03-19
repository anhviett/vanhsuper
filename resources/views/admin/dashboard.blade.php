@extends('admin.layouts.master')
@section('title'){{'Dashboard'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><p style="font-size: 30px; text-align: center">
                                        <?php
                                        echo \App\Users::count();
                                        ?>
                                        <i style="padding-left: 10px" class="fas fa-user"></i>
                                    </p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="manage-users.php">Xem thông tin chi
                                        tiết</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><p style="font-size: 30px; text-align: center">
                                        <?php
                                        echo \App\News::count();;
                                        ?>
                                        <i style="padding-left: 10px" class="fad fa-newspaper"></i>
                                    </p></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="manage-news.php">Xem thông tin chi
                                        tiết</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng sản phẩm
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Ảnh tin</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Tác giả</th>
                                        <th>Danh mục</th>
                                        <th>Tags</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $key => $news)
                                        <tr>
                                            <td class="text-center"><img src="" alt="" width="100" height="100"></td>
                                            <td>{{$news->title}}</td>
                                            <td>{{$news->description}}</td>
                                            <td>{{$news->author}}</td>
                                            <td>
                                                @foreach ($categories as $category)
                                                    @if ($news->category_id == $category->id)
                                                        {{$category->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($newsTags as $newsTag)
                                                    @if ($news->id == $newsTag->news_id)
                                                        @foreach ($tags as $tag)
                                                            @if($tag->id == $newsTag->tag_id)
                                                                {{$tag->name . ','}}
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a class="btn btn-primary"
                                                   href="/superFood/admin/news/edit/{{$news->id}}">Sửa</a>
                                                <a class="btn btn-danger xoa"
                                                   href="/superFood/admin/news/delete/{{$news->id}}">Xóa</a>
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
@section('footer_script')
    <script>
        $(document).ready(function () {
            $( "a.xoa" ).click(function( event ) {
                event.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắc chăn muốn xóa?',
                    text: "Dữ liệu bị xóa sẽ không thể khôi phục lại được!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Vâng, Xóa nó!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = $(this).attr('href');
                    }
                });
            });



        });
    </script>
@endsection