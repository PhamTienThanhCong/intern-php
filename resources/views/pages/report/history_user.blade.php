@extends('layouts.app')

@section('webName', 'Nhật kí hoạt động')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/format_css_date_time.css') }}">
@endsection

@section('content')
    <div class="content-profile">
        <div class="content-container">
            <div class="content">
                <form class="col-md-12 form-search">
                    <!-- Search section -->
                    <div class="search-left">
                        <div class="form-group">
                            <label for="connected_status">Chọn thời gian</label>
                            {{-- <select class="form-control" name="connected_status" id="connected_status">
                                <option value="all">Tất cả</option>
                                <option value="yes">Kết nối</option>
                                <option value="no">Mất kết nối</option>
                            </select> --}}
                            <input class="form-control form-control-solid" placeholder="Pick date rage"
                                id="kt_daterangepicker_1" />
                        </div>
                    </div>
                    <div class="search-right">
                        <div class="form-group">
                            <label for="keywords">Từ khóa</label>
                            <input type="text" class="form-control" id="keywords" name="keywords"
                                placeholder="Nhập từ khóa">
                            <i class="fa-solid fa-magnifying-glass" style="right: 15px"></i>
                        </div>
                    </div>
                </form>
                <div class="col-md-12" style="margin-top: 16px; position: relative">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tên đăng nhập</th>
                                <th>Thời gian tác động</th>
                                <th>IP thực hiện</th>
                                <th>Thao tác thực hiện</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->username }}
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>
                                    <td>
                                        {{ $item->ip }}
                                    </td>
                                    <td>
                                        {{ $item->action }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-box">
                        {{ $data->links('pagination::bootstrap-4') }}
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
