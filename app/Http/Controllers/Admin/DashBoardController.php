<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
