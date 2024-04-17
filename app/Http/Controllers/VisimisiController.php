<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.visi-misi.index', [
            "title"        => "Visi Misi - Badan Kepegawaian Provinsi Sumatera Utara",
            "visi_misi"    => VisiMisi_Model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.visi-misi.create', [
            "title"        => "Tambah Visi Misi - Badan Kepegawaian Provinsi Sumatera Utara",
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
            'visi'        => 'required',
            'misi'        => 'required',
            'imagegub'    => 'image|file|max:20480',
            'imagewagub'  => 'image|file|max:20480'
        ]);

        if ($request->file('imagegub')) {
            $validasi_data['imagegub'] = $request->file('imagegub')->store('images/profil/visi-misi');
        }

        if ($request->file('imagewagub')) {
            $validasi_data['imagewagub'] = $request->file('imagewagub')->store('images/profil/visi-misi');
        }
        VisiMisi_Model::create($validasi_data);
        return redirect('/main-dashboard/profil/visi-misi')->with('success-visi_misi', 'Visi Misi Berhasil Diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisiMisi_Model  $VisiMisi_Model
     * @return \Illuminate\Http\Response
     */
    public function show(VisiMisi_Model $VisiMisi_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisiMisi_Model  $VisiMisi_Model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.visi-misi.edit', [
            "title"        => "Edit Visi Misi - Badan Kepegawaian Provinsi Sumatera Utara",
            "visi_misi"    => VisiMisi_Model::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisiMisi_Model  $VisiMisi_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi_data = $request->validate([
            'visi'        => 'required',
            'misi'        => 'required',
            'imagegub'    => 'image|file|max:20480',
            'imagewagub'  => 'image|file|max:20480'
        ]);

        if ($request->file('imagegub')) {
            if ($request->oldFileGub) {
                Storage::delete($request->oldFileGub);
            }
            $validasi_data['imagegub'] = $request->file('imagegub')->store('images/profil/visi-misi');
        }

        if ($request->file('imagewagub')) {
            if ($request->oldFileWagub) {
                Storage::delete($request->oldFileWagub);
            }
            $validasi_data['imagewagub'] = $request->file('imagewagub')->store('images/profil/visi-misi');
        }

        VisiMisi_Model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/profil/visi-misi')->with('success-visi_misi', 'Visi Misi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisiMisi_Model  $VisiMisi_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisiMisi_Model $VisiMisi_Model)
    {
        //
    }
}
