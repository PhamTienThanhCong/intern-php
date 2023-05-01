@extends('layouts.app')

@section('webName', 'Cập nhập tài khoản')

@section('css')
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
@endsection

@section('content')
    <div class="content-profile">
        <p class="title">
            Quản lý tài khoản
        </p>
        <div class="content-container">
            <div class="content">
                <div class="content-white">
                    <form class="col-md-12 form-search" id="form-submit">
                        <!-- Search section -->
                        <div class="form-group form-group2">
                            <div class="text-header">
                                Thông tin tài khoản
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Họ tên: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $data->fullname }}" placeholder="Nhập họ tên" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Tên đăng nhập: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}" placeholder="Nhập tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                            <label for="device_ip">Nhập lại mật khẩu: <span style="color: red; font-size: 18px">*</span></label>
                            <input type="text" class="form-control" id="device_ip" name="device_ip" placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="device_type">Vai trò: <span style="color: red; font-size: 18px">*</span></label>
                            <select class="form-control" name="device_type" id="device_type">
                                <option disabled selected>Chọn vai trò</option>
                                <option value="connected">Kết nối</option>
                                <option value="disconnected">Mất kết nối</option>
                            </select>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="form-group">
                            <label for="device_type">Tình trạng: <span style="color: red; font-size: 18px">*</span></label>
                            <select class="form-control" name="device_type" id="device_type">
                                <option value="all">Tất cả</option>
                                <option value="connected">Kết nối</option>
                                <option value="disconnected">Mất kết nối</option>
                            </select>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="form-group">
                            <p class="text-alert-require">
                                <span style="color: red; margin-right: 5px; font-size: 18px">*</span> là trường thông tin bắt buộc
                            </p>
                        </div>
                        <button type="submit" style="display: none" id="btn-submit"></button>
                    </form>                    
                </div>
                <div class="form-btn">
                    <a href="{{ route('system.user.index') }}">
                        <button class="btn btn-blur">Hủy bỏ</button>
                    </a>
                    <button class="btn btn-bold" onclick="submit()">Cập nhập</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
