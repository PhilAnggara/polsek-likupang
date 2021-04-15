<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Senjata;
use App\Models\Kantor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
}
