<?php

namespace App\Http\Controllers;

use App\Models\Jabatanfungsional_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JafungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jafung.index', [
            "title"        => "Jabatan Fungsional - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Jabatanfungsional_model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jafung.create', [
            "title"        => "Tambah Alur Prosedur Jabatan Fungsional - Badan Kepegawaian Provinsi Sumatera Utara",
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
            $validasi_data['images'] = $request->file('images')->store('images/layanan/jafung');
        }

        Jabatanfungsional_model::create($validasi_data);
        return redirect('/main-dashboard/layanan/jabatan-fungsional')->with('success-jafung', 'Alur Jabatan Fungsional Berhasil Disimpan');
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
        return view('dashboard.jafung.edit', [
            "title"        => "Edit Jabatan Fungsional - Badan Kepegawaian Provinsi Sumatera Utara",
            "data"         => Jabatanfungsional_model::where('id', $id)->get()
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
            $validasi_data['images'] = $request->file('images')->store('images/layanan/jafung');
        }
        Jabatanfungsional_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/layanan/jabatan-fungsional')->with('success-jafung', 'Alur Jabatan Fungsional Berhasil Diupdate');
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
        $getFoto = Jabatanfungsional_model::where('id', $id)->get();
        if ($getFoto[0]->images) {
            Storage::delete($getFoto[0]->images);
        }

        // Menghapus Data
        Jabatanfungsional_model::where('id', $id)->delete();
        return redirect('/main-dashboard/layanan/jabatan-fungsional')->with('success-jafung', 'Alur Jabatan Fungsional Berhasil Dihapus');
    }
}
