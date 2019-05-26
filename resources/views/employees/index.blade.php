@extends('home')
@section('title', 'Danh sách Nhân viên')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách Nhân viên</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{ route('employees.create') }}">Thêm mới</a>
                    </div>
                    <div class="col-6">
                        <form class="navbar-form navbar-left" action="{{ route('employees.search') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search"
                                               value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-outline-dark">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success" style="text-align: center">{{ Session::get('success') }}</p>
                @endif
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($employees) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($employees as $key => $employee)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $employee->code }}</td>
                            <td>{{ $employee->group->name }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td><a href="{{route('employees.edit', $employee->id)}}"
                                   class="btn btn-outline-warning">sửa</a></td>
                            <td><a href="{{route('employees.delete', $employee->id)}}" class="btn btn-outline-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa nhân viên {{$employee->name}} ?')">xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
{{--                @if(isset($employees))--}}
{{--                    @foreach($employees as $key => $employee)--}}
{{--                        <tr>--}}
{{--                            <th scope="row">{{ ++$key }}</th>--}}
{{--                            <td>{{ $employee->code }}</td>--}}
{{--                            <td>{{ $employee->group->name }}</td>--}}
{{--                            <td>{{ $employee->name }}</td>--}}
{{--                            <td>{{ $employee->gender }}</td>--}}
{{--                            <td>{{ $employee->phone }}</td>--}}
{{--                            <td><a href="{{route('employees.edit', $employee->id)}}"--}}
{{--                                   class="btn btn-outline-warning">sửa</a></td>--}}
{{--                            <td><a href="{{route('employees.delete', $employee->id)}}" class="btn btn-outline-danger"--}}
{{--                                   onclick="return confirm('Bạn chắc chắn muốn xóa nhân viên {{$employee->name}} ?')">xóa</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <tr>--}}
{{--                        <td colspan="7" class="text-center">Không có dữ liệu</td>--}}
{{--                    </tr>--}}
{{--                @endif--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection