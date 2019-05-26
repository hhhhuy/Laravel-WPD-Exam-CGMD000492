@extends('home')
@section('title', 'Thêm mới Nhân viên')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-12"><h2>Thông tin nhân viên</h2></div>
            <div class="col-12">
                <form method="post" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã nhân viên</label>
                        <input type="number" class="form-control" name="code">
                        @if($errors->has('code'))
                            <p style="color: red">*{{$errors->first('code')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nhóm</label>
                        <select class="form-control" name="group_id">
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('group_id'))
                            <p style="color:red">*{{$errors->first('group_id')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name'))
                            <p style="color:red">*{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="dob">
                        @if($errors->has('dob'))
                            <p style="color:red">*{{$errors->first('dob')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label><br>
                        <label><input type="radio" name="gender" value="Nam">Nam</label>
                        <label><input type="radio" name="gender" value="Nữ">Nữ</label>
                        <label><input type="radio" name="gender" value="khác">Khác</label>
                        @if($errors->has('gender'))
                            <p style="color:red">*{{$errors->first('gender')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="number" class="form-control" name="phone">
                        @if($errors->has('phone'))
                            <p style="color:red">*{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="number" class="form-control" name="id_card_number">
                        @if($errors->has('id_card_number'))
                            <p style="color:red">*{{$errors->first('id_card_number')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                        @if($errors->has('email'))
                            <p style="color:red">*{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address">
                        @if($errors->has('address'))
                            <p style="color:red">*{{$errors->first('address')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection