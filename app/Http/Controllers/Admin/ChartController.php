<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
{
    $data = [ /* data for your chart */ ];

    return view('admin.dashboard', compact('data'));
}
}
