<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('webName') | {{ config('app.name', 'Laravel') }}
    </title>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
    @yield('css')
</head>

<body>
    <div class="container-web">
        <div class="navbar">
            <div class="navbar-logo">
                <a href="">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <ul class="navbar-menu">
                <a href="">
                    <li class="item item-active">
                        {{-- icon Dashboard --}}
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </li>
                </a>
                <a href="">
                    <li class="item">
                        <i class="fa-solid fa-display"></i>
                        thiết bị
                    </li>
                </a>
                <a href="">
                    <li class="item">
                        <i class="fa-regular fa-comments"></i>
                        dịch vụ
                    </li>
                </a>
                <a href="">
                    <li class="item">
                        <i class="fa-solid fa-layer-group"></i>
                        cấp số
                    </li>
                </a>
                <a href="">
                    <li class="item">
                        <i class="fa-regular fa-file-lines"></i>
                        báo cáo
                    </li>
                </a>
                <li href="#" class="item item-func">
                    <i class="fa-solid fa-gear"></i>
                    cài đặt hệ thống
                    <i class="fa-solid fa-ellipsis-vertical" style="width: 5px; margin-left: 8px"></i>
                    <ul class="sub-nav">
                        <a href="">
                            <li class="item">
                                Quản lý vài trò
                            </li>
                        </a>
                        <a href="">
                            <li class="item">
                                Quản lý tài khoản
                            </li>
                        </a>
                        <a href="">
                            <li class="item">
                                nhật kí người dùng
                            </li>
                        </a>
                    </ul>
                </li>
                <a href="">
                    <li class="item item-end">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </li>
                </a>
            </ul>
        </div>
        <div class="content-web">
            @yield('content')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@yield('js')

</html>
