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
        $r2 = Kendaraan::where('jenis', 'R2')->count();
        $r4 = Kendaraan::where('jenis', 'R4')->count();
        $senjata = Senjata::all()->count();
        $kantor = Kantor::all()->count();

        return view('pages.dashboard', compact('r2','r4','senjata','kantor'));
    }
}
