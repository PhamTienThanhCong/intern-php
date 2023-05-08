<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStore;
use App\Models\action;
use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public $records;
    public function __construct() {
        $this->records = [
            (object)[
                'name' => 'Cài đặt hệ thống'
            ],
            (object)[
                'name' => 'Quản lý vai trò',
                'url' => route('system.role.index')
            ],
        ];
    }
    public function index()
    {
        array_pop($this->records);
        // Lấy tất cả bản ghi từ model
        $records = role::paginate(1);
        return view('pages/role/index',[
            'records' => $this->records,
            'data' => $records
        ]);
    }

    public function create()
    {
        $action_list = action::orderBy('group')->get();
        $action_list = $action_list->groupBy('group');
    
        return view('pages/role/create', [
            'action_list' => $action_list,
            'records' => $this->records
        ]);
    }

    // store
    public function store(RoleStore $request)
    {
        // Xử lý lưu dữ liệu
        // lưu dữ liệu vảo bảng roles
        $role = new role();
        $role->name = $request->name;
        $role->description = $request->description;
        $action_ids = '';
        foreach ($request->action as $action_id) {
            $action_ids .= $action_id . ',';
        }
        $action_ids = substr($action_ids, 0, -1);
        $role->action_ids = $action_ids;
        $role->save();
        // chuyển hướng về trang danh sách
        return redirect()->route('system.role.index');
    }

    public function edit($id)
    {
        $data = (object) [
            'name' => 'Admin',
            'description' => 'Quản trị viên hệ thống',
        ];
        return view('pages/role/edit', [
            'data' => $data,
            'id' => $id,
            'records' => $this->records
        ]);
    }

    public function update(Request $request, $id)
    {
        // Xử lý cập nhật tài nguyên
    }

    public function destroy($id)
    {
        // Xóa tài nguyên
    }
}
