<?php

namespace App\Http\Controllers\AdminAuth;

use App\Dosen;
use App\Kriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $dosens = Dosen::all();
        $kriterias = Kriteria::all();
        return view('admin.home')->with(['dosens' => $dosens, 'kriterias' => $kriterias]);
    }
}
