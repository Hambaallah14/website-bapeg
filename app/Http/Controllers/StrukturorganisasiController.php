<?php

namespace App\Http\Controllers;

use App\Models\Strukturorganisasi_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturorganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.struktur-organisasi.index', [
            "title"        => "Struktur Organisasi - Badan Kepegawaian Provinsi Sumatera Utara",
            "struktur"     => Strukturorganisasi_Model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.struktur-organisasi.create', [
            "title"        => "Tambah Struktur Organisasi - Badan Kepegawaian Provinsi Sumatera Utara",
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
            'images'  => 'required|image|file|max:2048'
        ]);

        if ($request->file('images')) {
            $validasi_data['images'] = $request->file('images')->store('images/profil/struktur-organisasi');
        }

        Strukturorganisasi_Model::create($validasi_data);
        return redirect('/main-dashboard/profil/struktur-organisasi')->with('success-struktur', 'Struktur Organisasi Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strukturorganisasi_Model  $Strukturorganisasi_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Strukturorganisasi_Model $Strukturorganisasi_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strukturorganisasi_Model  $Strukturorganisasi_Model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.struktur-organisasi.edit', [
            "title"        => "Edit Slide - Badan Kepegawaian Provinsi Sumatera Utara",
            "struktur"     => Strukturorganisasi_Model::where('id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Strukturorganisasi_Model  $Strukturorganisasi_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi_data = $request->validate([
            'images'  => 'required|image|file|max:2048'
        ]);

        if ($request->file('images')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validasi_data['images'] = $request->file('images')->store('images/profil/struktur-organisasi');
        }
        Strukturorganisasi_Model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/profil/struktur-organisasi')->with('success-struktur', 'Struktur Organisasi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strukturorganisasi_Model  $Strukturorganisasi_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strukturorganisasi_Model $Strukturorganisasi_Model)
    {
        //
    }
}
