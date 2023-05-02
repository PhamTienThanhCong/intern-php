@extends('layouts.app')

@section('webName', 'Cập nhập vai trò')

@section('css')
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <style>
        .form-group {
            width: 100% !important;
            min-width: 400px !important;
            max-width: 560px !important;
        }
        .form-group textarea{
            height: 160px;
        }
        .list-action{
            height: 420px;
            padding: 16px 20px;
            background-color: #FFF2E7;
            overflow-y: scroll;
            border-radius: 8px;
        }
        .list-action ul{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .list-action ul li{
            padding: 8px 0;
            display: flex;
            color: #535261;
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            align-items: center;
        }
        .list-action ul li input[type="checkbox"]{
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
        .list-action::-webkit-scrollbar {
            width: 4px; /* chiều rộng thanh kéo */
            height: 340px;
        }

        .list-action::-webkit-scrollbar-track {
            background-color: transparent; /* màu nền của thanh kéo */
        }

        .list-action::-webkit-scrollbar-thumb {
            background-color: #FFC89B;
            border-radius: 43px; 
        }

        .list-action::-webkit-scrollbar-thumb:hover {
            background-color: #555; /* màu của thanh kéo khi hover */
        }
    </style>
@endsection

@section('content')
    <div class="content-profile">
        <p class="title">
            Quản lý vai trò
        </p>
        <div class="content-container">
            <div class="content">
                <div class="content-white">
                    <form class="col-md-12 form-search" id="form-submit">
                        <!-- Search section -->
                        <div class="form-group form-group2">
                            <div class="text-header">
                                Thông tin vai trò
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 12px">
                            <div class="form-group">
                                <label for="rolename">Tên vai trò: <span style="color: red; font-size: 18px">*</span></label>
                                <input type="text" class="form-control" id="rolename" name="fullname" required placeholder="Nhập họ tên" value="{{ $data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả: <span style="color: red; font-size: 18px">*</span></label>
                                <textarea name="description" class="form-control" id="description" placeholder="Nhập mô tả">{{ $data->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <p class="text-alert-require">
                                    <span style="color: red; margin-right: 5px; font-size: 18px">*</span> là trường thông tin bắt buộc
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-left: 12px">
                            <div class="form-group">
                                <label for="fullname">Phân quyền chức năng: <span style="color: red; font-size: 18px">*</span></label>
                                <div class="list-action">
                                    <ul>
                                        <div class="text-header">
                                            Nhóm chức năng A
                                        </div>
                                        <ul>
                                            <li> <input type="checkbox"> Tất cả </li>
                                            <li> <input type="checkbox"> Chức năng A </li>
                                            <li> <input type="checkbox"> Chức năng B </li>
                                            <li> <input type="checkbox"> Chức năng C </li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <div class="text-header">
                                            Nhóm chức năng B
                                        </div>
                                        <ul>
                                            <li> <input type="checkbox"> Tất cả </li>
                                            <li> <input type="checkbox"> Chức năng A </li>
                                            <li> <input type="checkbox"> Chức năng B </li>
                                            <li> <input type="checkbox"> Chức năng C </li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <div class="text-header">
                                            Nhóm chức năng C
                                        </div>
                                        <ul>
                                            <li> <input type="checkbox"> Tất cả </li>
                                            <li> <input type="checkbox"> Chức năng A </li>
                                            <li> <input type="checkbox"> Chức năng B </li>
                                            <li> <input type="checkbox"> Chức năng C </li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button type="submit" style="display: none" id="btn-submit"></button>

                    </form>                    
                </div>
                <div class="form-btn">
                    <a href="{{ route('system.role.index') }}">
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
