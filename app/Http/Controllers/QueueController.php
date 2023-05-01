<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        return view('pages/queue/index');
    }

    public function create()
    {
        $queue_service = [
            (object) [
                "service_id" => "DV1234",
                "service_name" => "Khám tim mạch",
            ],
            (object) [
                "service_id" => "DV1234",
                "service_name" => "Khám phổi",
            ],
            (object) [
                "service_id" => "DV1234",
                "service_name" => "Khám tai mũi họng",
            ],
            (object) [
                "service_id" => "DV1234",
                "service_name" => "Khám mắt",
            ],
        ];
        return view('pages/queue/create', compact("queue_service"));
    }

    public function edit($id)
    {
        $data = (object) [
            "queue_id" => "DV1234",
            "queue_name" => "Máy tính xách tay",
            "queue_description" => "Mô tả dịch vụ",
        ];
        return view('pages/queue/edit', compact("data", 'id'));
    }

    public function update(Request $request, $id)
    {
        // Xử lý cập nhật tài nguyên
    }

    public function show($id)
    {
        return view('pages/queue/show', compact('id'));
    }

    public function destroy($id)
    {
        // Xóa tài nguyên
    }
}
