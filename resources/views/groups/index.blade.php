@extends('home')
@section('title', 'Danh Sách Nhóm nhân viên')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Nhóm nhân viên</h1>
            </div>
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                @endif
            </div>
            <div class="col-12">
                <a class="btn btn-primary" href="{{route('groups.create')}}">Thêm mới</a>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên Nhóm</th>
                    <th>Số nhân viên trong nhóm</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($groups) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($groups as $key => $group)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{$group->name}}</td>
                            <td>{{count($group->employees)}}</td>
                            <td><a href="" class="btn btn-outline-warning">Sửa</a></td>
                            <td><a href="" class="btn btn-outline-danger">Xoá</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection