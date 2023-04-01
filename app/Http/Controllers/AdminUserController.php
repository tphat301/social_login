<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session([
                'module_active' => 'user'
            ]);
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $keywords = '';
        if ($keywords = $request->input('keyword')) {
            $keywords = $request->input('keyword');
        }
        $users = User::where("name", "LIKE", "%{$keywords}%")->paginate(10);
        return view('admin.user.index', compact('users'));
    }
}
