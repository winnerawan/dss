<?php

namespace App\Http\Controllers\AdminAuth;

use DB;
use App\SubKriteria;
use App\Kriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriterias = Kriteria::all();
        return view('admin.kriteria.index')->with(['kriterias' => $kriterias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriteria = new Kriteria;

        $kriteria->kriteria = $request->kriteria;
        $kriteria->sifat = $request->sifat;
        $kriteria->bobot = $request->bobot;

        $kriteria->save();

        $sub_kriteriasInput = $request->get('sub_kriterias');
        $sub_kriterias = [];

        foreach ($sub_kriteriasInput as $sub_kriteria) {
            $sub_kriterias[] = new SubKriteria($sub_kriteria);
        }

        $kriteria->sub_kriteria()->saveMany($sub_kriterias);

        return redirect('admin/kriteria');
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
        $kriteria = Kriteria::with('sub_kriteria')->find($id);
        return view('admin.kriteria.edit')->with(['kriteria' => $kriteria]);

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
        $kriteria = Kriteria::find($id);

        $kriteria->kriteria = $request->input('kriteria');
        $kriteria->sifat = $request->input('sifat');
        $kriteria->bobot = $request->input('bobot');

        $kriteria->save();
//
//        $sub_kriteriasInput = $request->get('sub_kriterias');
//        $sub_kriterias = [];
//
//        foreach ($sub_kriteriasInput as $sub_kriteria) {
//            $sub_kriterias[] = new SubKriteria($sub_kriteria);
//        }
//
//        $kriteria->sub_kriteria()->update($sub_kriterias);

        return redirect('admin/kriteria');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kriteria = Kriteria::find($id);

        $kriteria->delete();
        $sub_kriteria = SubKriteria::find($id);
        $sub_kriteria->delete();

        return redirect()->route('admin.kriteria.index');
    }
}
