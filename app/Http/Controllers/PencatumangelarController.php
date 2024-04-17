<?php

namespace App\Http\Controllers;

use App\Models\Pencantumangelar_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PencatumangelarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pencantuman-gelar.index', [
            "title"        => "Pencantuman Gelar - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Pencantumangelar_model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pencantuman-gelar.create', [
            "title"        => "Tambah Alur Prosedur Pencantuman Gelar - Badan Kepegawaian Provinsi Sumatera Utara",
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
            $validasi_data['images'] = $request->file('images')->store('images/layanan/pencantuman-gelar');
        }

        Pencantumangelar_model::create($validasi_data);
        return redirect('/main-dashboard/layanan/pencantuman-gelar')->with('success-pencantuman-gelar', 'Alur Pencantuman Gelar Berhasil Disimpan');
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
        return view('dashboard.pencantuman-gelar.edit', [
            "title"        => "Edit Pencantuman Gelar- Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Pencantumangelar_model::where('id', $id)->get()
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
            $validasi_data['images'] = $request->file('images')->store('images/layanan/pencantuman-gelar');
        }
        Pencantumangelar_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/layanan/pencantuman-gelar')->with('success-pencantuman-gelar', 'Alur Pencantuman Gelar Berhasil Diupdate');
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
        $getFoto = Pencantumangelar_model::where('id', $id)->get();
        if ($getFoto[0]->images) {
            Storage::delete($getFoto[0]->images);
        }

        // Menghapus Data
        Pencantumangelar_model::where('id', $id)->delete();
        return redirect('/main-dashboard/layanan/pencantuman-gelar')->with('success-pencantuman-gelar', 'Alur Pencantuman Gelar Berhasil Dihapus');
    }
}
