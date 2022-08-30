<?php

namespace App\Http\Controllers\HR\Junior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('role:hr_junior');
    }

    public function index()
    {
        return view('hr.junior.dashboard');
    }
}
