<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // create session flash username and password for testing
    // session()->flash('error', 'Sai mật khẩu hoặc tên đăng nhập');
    return view('auth/login');
})->name('auth.login');

Route::post('/logging', function(){
    return redirect()->route('auth.my-profile');
})->name('auth.logging');

Route::get('/forgot-password', function () {
    return view('auth/forgot-password');
})->name('auth.forgot-password');

Route::get('/new-password', function () {
    return view('auth/new-password');
})->name('auth.new-password');

Route::get('/auth/my-profile', function () {
    $data = (object) [
        'name' => 'Trần Bình Dương',
        'email' => 'admin@gmail.com',    
        'phone' => '0123456789',    
        'username' => 'tranbinhduong0909',    
        'password' => '123123',    
        'role' => 'Developer',
    ];

    return view('auth/my-profile', compact("data"));
})->name('auth.my-profile');

Route::get('/auth/device', function () {
    return view('pages/device/index');
})->name('auth.device.index');

Route::get('/auth/device/create', function () {
    return view('pages/device/create');
})->name('auth.device.create');

Route::get('/auth/device/{id}/edit', function ($id) {
    $data = (object) [
        "device_id" => "DV1234",
        "device_type" => "connected",
        "device_name" => "Máy tính xách tay",
        "device_username" => "user123",
        "device_ip" => "192.168.1.100",
        "device_password" => "p@ssw0rd",
        "service" => "Email"       
    ];
    return view('pages/device/edit', compact("data", 'id'));
})->name('auth.device.edit');

Route::get('/auth/device/{id}', function ($id) {
    $data = (object) [
        "device_id" => "DV1234",
        "device_type" => "connected",
        "device_name" => "Máy tính xách tay",
        "device_username" => "user123",
        "device_ip" => "192.168.1.100",
        "device_password" => "p@ssw0rd",
        "service" => "Email"       
    ];
    return view('pages/device/detail', compact("data", 'id'));
})->name('auth.device.detail');
