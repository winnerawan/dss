<?php

namespace App\Http\Controllers\StudentAuth;

use App\Http\Controllers\Controller;

class NilaiController extends Controller {

    public function index()
    {
        $dosens = Dosen::all();
        $kriteria = Kriteria::with('sub_kriteria')->get();

        return view('admin.hitung.index')->with(['dosens' => $dosens, 'kriterias' => $kriteria]);
    }

    public function store(Request $request)
    {
        
        foreach ($request->get('nilai') as $items => $value) {
            $nilai = new Nilai;
            $nilai->id_dosen = $request->get('id_dosen');
            $nilai->id_kriteria = $items;
            $nilai->nilai = $value;

            $nilai->save();

        }
        return redirect('admin/ranks');

    }