<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super');
    }

    public function index()
    {
        return view('super.dashboard');
    }
}
