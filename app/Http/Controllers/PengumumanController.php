<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengumuman.index', [
            "title"        => "Pengumuman - Badan Kepegawaian Provinsi Sumatera Utara",
            "pengumuman"   => Pengumuman_model::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengumuman.create', [
            "title"        => "Tambah Pengumuman - Badan Kepegawaian Provinsi Sumatera Utara",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi_data = $request->validate([
            'tanggal'     => 'required',
            'title'       => 'required|unique:pengumuman_models',
            'files'       => 'required|file|file|max:10240'
        ]);

        if ($request->file('files')) {
            $validasi_data['files'] = $request->file('files')->store('documents/pengumuman');
        }

        Pengumuman_model::create($validasi_data);
        return redirect('/main-dashboard/informasi/pengumuman')->with('success-pengumuman', 'Pengumuman Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\P_Model  $p_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman_model $p_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\P_Model  $p_Model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.pengumuman.edit', [
            "title"        => "Edit Pengumuman - Badan Kepegawaian Provinsi Sumatera Utara",
            "pengumuman"   => Pengumuman_model::where('id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\P_Model  $p_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi_data = $request->validate([
            'tanggal'     => 'required',
            'title'       => 'required',
            'files'      => 'file|file|max:5120'
        ]);

        if ($request->file('files')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validasi_data['files'] = $request->file('files')->store('documents/pengumuman');
        }

        Pengumuman_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/informasi/pengumuman')->with('success-pengumuman', 'Pengumuman Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\P_Model  $p_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus File
        $getFile = Pengumuman_model::where('id', $id)->get();
        if ($getFile[0]->files) {
            Storage::delete($getFile[0]->files);
        }

        // Menghapus Data
        Pengumuman_model::where('id', $id)->delete();
        return redirect('/main-dashboard/informasi/pengumuman')->with('success-pengumuman', 'Pengumuman Berhasil Dihapus');
    }
}
