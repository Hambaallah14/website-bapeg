<?php

namespace App\Http\Controllers;

use App\Models\Gajiberkala_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GajiberkalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gaji-berkala.index', [
            "title"        => "Gaji Berkala - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Gajiberkala_model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gaji-berkala.create', [
            "title"        => "Tambah Alur Prosedur Gaji Berkala - Badan Kepegawaian Provinsi Sumatera Utara",
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
            $validasi_data['images'] = $request->file('images')->store('images/layanan/gaji-berkala');
        }

        Gajiberkala_model::create($validasi_data);
        return redirect('/main-dashboard/layanan/gaji-berkala')->with('success-gaji_berkala', 'Alur Gaji Berkala Berhasil Disimpan');
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
        return view('dashboard.gaji-berkala.edit', [
            "title"        => "Edit Alur Prosedur - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Gajiberkala_model::where('id', $id)->get()
        ]);
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
        $validasi_data = $request->validate([
            'images'  => 'required|image|file|max:2048'
        ]);

        if ($request->file('images')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validasi_data['images'] = $request->file('images')->store('images/layanan/gaji-berkala');
        }
        Gajiberkala_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/layanan/gaji-berkala')->with('success-gaji_berkala', 'Alur Gaji Berkala Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus Foto
        $getFoto = Gajiberkala_model::where('id', $id)->get();
        if ($getFoto[0]->images) {
            Storage::delete($getFoto[0]->images);
        }

        // Menghapus Data
        Gajiberkala_model::where('id', $id)->delete();
        return redirect('/main-dashboard/layanan/gaji-berkala')->with('success-gaji_berkala', 'Alur Gaji Berkala Berhasil Dihapus');
    }
}
