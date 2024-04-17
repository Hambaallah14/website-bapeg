<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang_model;
use App\Models\Tugasbidang_model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bidang.index', [
            "title"        => "Tugas Pokok dan Fungsi - Badan Kepegawaian Provinsi Sumatera Utara",
            "bidang"       => Bidang_model::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bidang.create', [
            "title"        => "Tambah Tugas Pokok dan Fungsi - Badan Kepegawaian Provinsi Sumatera Utara",
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
            'bidang'   => 'required|unique:bidang_models',
        ]);
        Bidang_model::create($validasi_data);
        return redirect('/main-dashboard/profil/tupoksi')->with('success-bidang', 'Bidang Berhasil Disimpan');
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
        return view('dashboard.bidang.edit', [
            "title"        => "Edit Bidang - Badan Kepegawaian Provinsi Sumatera Utara",
            "bidang"       => Bidang_model::where('id', $id)->get()
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
            'bidang'   => 'required',
        ]);

        Bidang_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/profil/tupoksi')->with('success-bidang', 'Bidang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Menghapus Data
        Bidang_model::where('id', $id)->delete();
        return redirect('/main-dashboard/profil/tupoksi')->with('success-bidang', 'Bidang Berhasil Dihapus');
    }
}
