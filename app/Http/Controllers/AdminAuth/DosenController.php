<?php

namespace App\Http\Controllers\AdminAuth;

use App\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosen.index')->with(['dosens' => $dosens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Dosen;

        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->alamat = $request->alamat;
        $dosen->pendidikan = $request->pendidikan;
        $dosen->jabatan = $request->jabatan;

        $dosen->save();

        return redirect('admin/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('admin.dosen.edit')->with(['dosen' => $dosen]);
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
        $dosen = Dosen::find($id);

        $dosen->nip = $request->input('nip');
        $dosen->nama = $request->input('nama');
        $dosen->alamat = $request->input('alamat');
        $dosen->pendidikan = $request->input('pendidikan');
        $dosen->jabatan = $request->input('jabatan');
        //$dosen->updated_at = \Carbon\Carbon::now('Asia/Jakarta');

        $dosen->save();

        return redirect('admin/dosen');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);

        $dosen->delete();
        return redirect()->route('admin.dosen.index');

    }
}
