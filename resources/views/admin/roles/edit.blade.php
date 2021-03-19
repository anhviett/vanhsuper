
@extends('admin.layouts.master')
@section('title'){{'Add Role'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content" style="background: #f2f3f8">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Thêm quyền</h1>
                    <ol class="breadcrumb mb-4" style="background: white">
                        <li class="breadcrumb-item"><a href="../main-view/dashboard.php">Dashboard</a></li>

                        <li class="breadcrumb-item active">Thêm quyền</li>

                    </ol>
                    <form action="/superFood/admin/roles/update/{{$role->id}}" method="POST">
                        <div class="role__content row">
                            <div class="col-md-4">
                                <div class="role__left">
                                    <div class="form-group">
                                        <label for="roleNameUpdate">Tên quyền:</label>
                                        <input value="{{$role->name}}" type="text" name="roleNameUpdate"
                                               class="form-control" id="roleNameUpdate">
                                    </div>
                                    <button type="submit"
                                            class="btn btn-primary addBtn">Lưu
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="role__right">
                                    {{$code = ''}}
                                    @foreach ($permissions as $permission)
                                        @php $module_name = @explode('_', $permission->code)[0] @endphp
                                        @if ($module_name != $code)
                                            @php $code = $module_name @endphp
                                            @if ($module_name === "post")
                                                @php $module_name = "Bài viết" @endphp
                                            @elseif ($module_name === "product")
                                                @php $module_name = "Sản phẩm" @endphp
                                            @elseif ($module_name === "role")
                                                @php $module_name = "Quyền" @endphp
                                            @elseif ($module_name === "user")
                                                @php $module_name = "Người dùng" @endphp
                                            @endif
                                            <label class='perChecked' style="margin-top: 30px">
                                                <input
                                                        style='margin-right: 5px;'
                                                        name='inputPers'
                                                        type='checkbox' checked
                                                        value="{{$permission->id}}">{{$module_name}}
                                            </label>
                                        @endif
                                        <label style="display: inline-block; width: 100%; margin-left: 20px">
                                            <input style="margin-right: 5px;" name="pers[]"
                                                   type="checkbox"
                                                   @php $pers_checked = []; @endphp
                                                   @foreach($role_permissions as $role_permission)
                                                   @php $pers_checked[] = $role_permission->permission_id; @endphp
                                                   @endforeach
                                                   @if (in_array($permission->id, $pers_checked))
                                                   checked
                                                   @endif
                                                   value="{{$permission->id}}">{{$permission->name}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection