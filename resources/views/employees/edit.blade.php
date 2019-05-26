@extends('home')
@section('title', 'Chỉnh sửa thông tin Nhân viên')
@section('content')
    <div class="col-12">
        <div class="row" style="padding-bottom: 20px">
            <div class="col-12">
                <h1>Chỉnh sửa thông tin Nhân viên</h1>
            </div>
            <div class="col-12">
                <form method="post" href="{{route('employees.update', $employee->id)}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$employee->id}}">
                    <div class="form-group">
                        <label>Mã nhân viên</label>
                        <input type="text" name="code" class="form-control" value="{{$employee->code}}">
                        @if($errors->has('code'))
                            <p style="color: red">*{{$errors->first('code')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nhóm nhân viên</label>
                        <select class="form-control" name="group_id">
                            @foreach($groups as $group)
                                <option
                                        @if($employee->group_id == $group->id)
                                        {{"selected"}}
                                        @endif
                                        value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('group_id'))
                            <p style="color:red">*{{$errors->first('group_id')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                        @if($errors->has('name'))
                            <p style="color:red">*{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" name="dob" class="form-control" value="{{$employee->dob}}">
                        @if($errors->has('dob'))
                            <p style="color:red">*{{$errors->first('dob')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label><br>
                        <label><input type="radio" name="gender" value="Nam">Nam</label>
                        <label><input type="radio" name="gender" value="Nữ">Nữ</label>
                        <label><input type="radio" name="gender" value="Khác">Khác</label>
                        @if($errors->has('gender'))
                            <p style="color:red">*{{$errors->first('gender')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số điện thọai</label>
                        <input type="number" name="phone" class="form-control" value="{{$employee->phone}}">
                        @if($errors->has('phone'))
                            <p style="color:red">*{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="number" name="id_card_number" class="form-control"
                               value="{{$employee->id_card_number}}">
                        @if($errors->has('id_card_number'))
                            <p style="color:red">*{{$errors->first('id_card_number')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{$employee->email}}">
                        @if($errors->has('email'))
                            <p style="color:red">*{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="{{$employee->address}}">
                        @if($errors->has('address'))
                            <p style="color:red">*{{$errors->first('address')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <a href="{{route('welcome')}}">
                        <button class="btn btn-outline-info">Trang Chủ</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection