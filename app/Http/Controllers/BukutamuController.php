<?php

namespace App\Http\Controllers;

use App\Models\Bukutamu_model;
use App\Models\Slide_model;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/buku_tamu', [
            "title"        => "Buku Tamu - Badan Kepegawaian Provinsi Sumatera Utara",
            "buku_tamu"    => Bukutamu_model::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.buku_tamu.create', [
            "title"        => "Buku Tamu - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
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
        $data = $request->validate([
            'nama'         => 'required|min:3',
            'email'        => 'required|email:dns|unique:bukutamu_models',
            'komentar'     => 'required|min:3',
        ]);

        ob_start();
        system('ipconfig /all');
        $mycom = ob_get_contents();
        ob_clean();
        $findme = "Physical";
        $pmac = strpos($mycom, $findme);
        $mac = substr($mycom, ($pmac + 36), 17);
        echo $mac;

        $data['device']     = $mac;

        // encripsi password
        Bukutamu_model::create($data);
        // return redirect('/')->with('success-buku_tamu', 'Terimakasih sudah mengisi Buku tamu');
        return redirect('/')->with('success-buku_tamu', 'Terimakasih sudah mengisi Buku tamu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bukutamu_model  $bukutamu_model
     * @return \Illuminate\Http\Response
     */
    public function show(Bukutamu_model $bukutamu_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bukutamu_model  $bukutamu_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Bukutamu_model $bukutamu_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bukutamu_model  $bukutamu_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu_model $bukutamu_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bukutamu_model  $bukutamu_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bukutamu_model $bukutamu_model)
    {
        //
    }
}
