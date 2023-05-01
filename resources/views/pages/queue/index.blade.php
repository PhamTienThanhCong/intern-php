@extends('layouts.app')

@section('webName', 'Danh sách cấp số')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/format_css_date_time.css') }}">
    <style>
        .search-list-left .form-group{
            width: 30% !important;
        }
        .search-list-left .form-group .form-control{
            width: 100% !important;
        }
        .search-list-left{
            display: flex;
            justify-content: space-between
        }
        .search-list-right{
            display: flex;
        }
        .search-list-right .form-group{
            width: 45% !important;
            margin-left: 5%
        }
        .search-list-right .form-group .form-control{
            width: 100% !important;
        }
        .form-group i{
            right: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="content-profile">
        <p class="title">
            Quản lý dịch vụ
        </p>
        <div class="content-container">
            <div class="content">
                <form class="col-md-12 form-search">
                    <!-- Search section -->
                    <div class="col-md-6 search-list-left">
                        <div class="form-group">
                            <label for="active">Tên dịch vụ</label>
                            <select class="form-control" id="active" name="active">
                                <option value="all">Tất cả</option>
                                <option value="yes">Hoạt động</option>
                                <option value="no">Ngưng hoạt động</option>
                            </select>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="form-group">
                            <label for="active">Tình trạng</label>
                            <select class="form-control" id="active" name="active">
                                <option value="all">Tất cả</option>
                                <option value="yes">Hoạt động</option>
                                <option value="no">Ngưng hoạt động</option>
                            </select>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <div class="form-group">
                            <label for="active">Nguồn cấp</label>
                            <select class="form-control" id="active" name="active">
                                <option value="all">Tất cả</option>
                                <option value="yes">Hoạt động</option>
                                <option value="no">Ngưng hoạt động</option>
                            </select>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="search-list-right col-md-6">
                        <div class="form-group">
                            <label for="connected_status">Chọn thời gian</label>
                            <input class="form-control form-control-solid" placeholder="Pick date rage"
                                id="kt_daterangepicker_1" />
                        </div>
                        <div class="form-group">
                            <label for="keywords">Từ khóa</label>
                            <input type="text" class="form-control" id="keywords" name="keywords"
                                placeholder="Nhập từ khóa">
                            <i class="fa-solid fa-magnifying-glass" style="right: 15px"></i>
                        </div>
                    </div>
                </form>
                <div class="col-md-12" style="margin-top: 16px; position: relative">
                    <!-- Content -->
                    <a href="{{ route('auth.queue.create') }}">
                        <button class="btn-add">
                            <i class="fa-solid fa-plus"></i>
                            <p>
                                Cấp<br>số mới
                            </p>
                        </button>
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Tên dịch vụ</th>
                                <th>Thời gian cấp</th>
                                <th>Hạn sử dụng</th>
                                <th>Trạng thái</th>
                                <th>Nguồn cấp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td>Tên khách hàng</td>
                                    <td>Tên dịch vụ</td>
                                    <td>Tdời gian cấp</td>
                                    <td>Hạn sử dụng</td>
                                    <td>
                                        @if ($i % 2 == 0)
                                            <i class="fa-solid fa-circle connected"></i>
                                            Hoạt động
                                        @else
                                            <i class="fa-solid fa-circle unconnected"></i>
                                            Ngưng hoạt động
                                        @endif
                                    </td>
                                    <td>Nguồn cấp</td>
                                    <td class="text-center">
                                        <a href="{{ route('auth.queue.show', $i) }}" class="tag-active">Chi tiết</a>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <div class="pagination-box">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fa-solid fa-caret-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fa-solid fa-caret-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $("#kt_daterangepicker_1").daterangepicker();
    </script>
@endsection
