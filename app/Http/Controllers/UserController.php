<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages/user/index');
    }

    public function create()
    {
        return view('pages/user/create');
    }

    public function edit($id)
    {
        $data = (object) [
            'fullname' => 'Trần Bình Dương',
            'email' => 'admin@gmail.com',    
            'phone' => '0123456789',    
            'username' => 'tranbinhduong0909',    
            'password' => '123123',    
            'role' => 'Developer',
        ];
        return view('pages/user/edit', compact("data", 'id'));
    }

    public function update(Request $request, $id)
    {
        // Xử lý cập nhật tài nguyên
    }

    public function show($id)
    {
        $data = (object) [
            'name' => 'Trần Bình Dương',
            'email' => 'admin@gmail.com',    
            'phone' => '0123456789',    
            'username' => 'tranbinhduong0909',    
            'password' => '123123',    
            'role' => 'Developer',
        ];
        return view('pages/user/show', compact("data", 'id'));
    }

    public function destroy($id)
    {
        // Xóa tài nguyên
    }
}
