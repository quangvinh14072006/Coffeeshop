<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //Thực hiện câu lệnh kết nối thô lấy dữ liệu minh họa
        $product = \DB::select("SELECT * FROM products");
        return response()->json([
            "status"=>"success",
            "data"=>$product
        ],200);
    }
}