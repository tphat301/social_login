<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(
                ["module_active" => "product"]
            );
            return $next($request);
        });
    }

    // Danh sách sản phẩm
    public function index()
    {
        return view("admin.product.index");
    }

    // Thêm sản phẩm
    public function create()
    {
        return view('admin.product.create');
    }
}
