<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Quản lý nhân viên
        </div>
        <div class="links">
            <a href="{{ route('employees.create') }}">Thêm mới nhân viên</a>
            <a href="{{ route('employees.index') }}">Danh sách nhân viên</a>
            <a href="{{ route('groups.create') }}">Thêm mới Nhóm nhân viên</a>
            <a href="{{ route('groups.index') }}">Danh sách Nhóm nhân viên</a>
        </div>
    </div>
</div>
</body>
</html>
