<?php

namespace App\Http\Controllers\HR\Senior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:hr_senior');
    }

    public function index()
    {
        return view('hr.senior.dashboard');
    }
}
