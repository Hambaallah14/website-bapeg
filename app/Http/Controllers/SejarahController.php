<?php

namespace App\Http\Controllers;

use App\Models\Sejarah_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sejarah.index', [
            "title"        => "Sejarah - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Sejarah_model::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sejarah.create', [
            "title"        => "Tambah Sejarah - Badan Kepegawaian Provinsi Sumatera Utara",
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
            'konten'  => 'required',
            'images'  => 'required|image|file|max:5120'
        ]);

        if ($request->file('images')) {
            $validasi_data['images'] = $request->file('images')->store('images/profil/sejarah');
        }
        Sejarah_model::create($validasi_data);
        return redirect('/main-dashboard/profil/sejarah')->with('success-sejarah', 'Sejarah Berhasil Disimpan');
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
        return view('dashboard.sejarah.edit', [
            "title"        => "Edit Sejarah - Badan Kepegawaian Provinsi Sumatera Utara",
            "sejarah"      => Sejarah_model::where('id', $id)->get()
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
            'konten'  => 'required',
            'images'  => 'image|file|max:5120'
        ]);

        if ($request->file('images')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validasi_data['images'] = $request->file('images')->store('images/profil/sejarah');
        }
        Sejarah_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/profil/sejarah')->with('success-sejarah', 'Sejarah Berhasil Diupdate');
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
        $getFoto = Sejarah_model::where('id', $id)->get();
        if ($getFoto[0]->images) {
            Storage::delete($getFoto[0]->images);
        }

        // Menghapus Data
        Sejarah_model::where('id', $id)->delete();
        return redirect('/main-dashboard/profil/sejarah')->with('success-sejarah', 'Sejarah Berhasil Dihapus');
    }
}
