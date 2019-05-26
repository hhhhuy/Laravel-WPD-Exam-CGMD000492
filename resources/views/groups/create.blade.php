@extends('home')
@section('title', 'Thêm mới nhóm nhân viên')
@section('content')
    <div class="col-12">
        <div class="col-12">
            <h1>Thêm mới Nhóm nhân viên</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{route('groups.store')}}">
                @csrf
                <div class="form-group">
                    <label>Tên Nhóm</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Thêm mới</button>
                <a href="{{route('groups.index')}}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection