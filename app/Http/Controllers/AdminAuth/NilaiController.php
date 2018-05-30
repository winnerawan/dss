<?php

namespace App\Http\Controllers\AdminAuth;

use App\Dosen;
use App\Nilai;
use App\Kriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = Dosen::all();
        $kriteria = Kriteria::with('sub_kriteria')->get();

        //return $kriteria;
        return view('admin.hitung.index')->with(['dosens' => $dosens, 'kriterias' => $kriteria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosens = Dosen::all();

        return view('admin.hitung.create')->with(['dosens' => $dosens]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$nilai_nilai->nilai = $request->get('nilai');

        foreach ($request->get('nilai') as $items => $value) {
            $nilai = new Nilai;
            $nilai->id_dosen = $request->get('id_dosen');
            $nilai->id_kriteria = $items;
            $nilai->nilai = $value;

            $nilai->save();

        }



//        $n = new Nilai;
//
//        $nilaiInput = $request->get('nilai');
//        $nilais = [];
//
//        foreach ($nilaiInput as $nilai) {
//            $nilais[] = new Nilai($nilai);
//            $n->save();
//        }


//        return $request->get('nilai');
        return redirect('admin/ranks');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
