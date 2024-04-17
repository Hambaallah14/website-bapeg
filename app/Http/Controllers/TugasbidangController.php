<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugasbidang_model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TugasbidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('dashboard.tugas_bidang.index', [
            "title"        => "Uraian Tugas - Badan Kepegawaian Provinsi Sumatera Utara",
            "tugas"        => Tugasbidang_model::where('bidang_id', $id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        echo "a";
        // return view('dashboard.tugas_bidang.edit', [
        //     "title"        => "Edit Uraian Tugas - Badan Kepegawaian Provinsi Sumatera Utara",
        //     "uraian"       => Tugasbidang_model::where('bidang_id', $id)->get()
        // ]);
    }

    public function uraian($id)
    {
        echo $id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $bidang_id)
    {
        // Menghapus Data
        Tugasbidang_model::where('id', $id)->delete();
        return redirect('/main-dashboard/profil/tupoksi/bidang/' . $bidang_id)->with('success-uraian', 'Uraian Tugas Berhasil Dihapus');
    }
}
