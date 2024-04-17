<?php

namespace App\Http\Controllers;

use App\Models\Berita_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index', [
            "title"        => "Berita - Badan Kepegawaian Provinsi Sumatera Utara",
            "berita"       => Berita_model::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create', [
            "title"        => "Tambah Berita - Badan Kepegawaian Provinsi Sumatera Utara",
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
            'title'   => 'required|unique:berita_models',
            'konten'  => 'required',
            'tanggal' => 'required',
            'images'  => 'required|image|file|max:1024'
        ]);

        $validasi_data['slug'] = Str::slug($request->title, '-');

        if ($request->file('images')) {
            $validasi_data['images'] = $request->file('images')->store('images/berita');
        }
        Berita_model::create($validasi_data);
        return redirect('/main-dashboard/informasi/berita')->with('success-berita', 'Berita Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beritaM  $beritaM
     * @return \Illuminate\Http\Response
     */
    public function show(Berita_model $beritaM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita_model  $beritaM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.berita.edit', [
            "title"        => "Edit Berita - Badan Kepegawaian Provinsi Sumatera Utara",
            "berita"       => Berita_model::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beritaM  $beritaM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi_data = $request->validate([
            'title'   => 'required',
            'konten'  => 'required',
            'tanggal' => 'required',
            'images'  => 'image|file|max:1024'
        ]);

        $validasi_data['slug'] = Str::slug($request->title, '-');

        if ($request->file('images')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validasi_data['images'] = $request->file('images')->store('images/berita');
        }
        Berita_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/informasi/berita')->with('success-berita', 'Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita_model  $beritaM
     * @return \Illuminate\Http\Response
     */
    public function destroy($a)
    {
        // Menghapus Foto
        $getFoto = Berita_model::where('slug', $a)->get();
        if ($getFoto[0]->images) {
            Storage::delete($getFoto[0]->images);
        }

        // Menghapus Data
        Berita_model::where('slug', $a)->delete();
        return redirect('/main-dashboard/informasi/berita')->with('success-berita', 'Berita Berhasil Dihapus');
    }
}
