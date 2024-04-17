<?php

namespace App\Http\Controllers;

use App\Models\Slide_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidebannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.slide.index', [
            "title"        => "Slide Banner - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_Model::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slide.create', [
            "title"        => "Tambah Slide - Badan Kepegawaian Provinsi Sumatera Utara",
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
            $validasi_data['images'] = $request->file('images')->store('images/slide-banner');
        }

        Slide_model::create($validasi_data);
        return redirect('/main-dashboard/slide-banner')->with('success-slide', 'Slide Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sModel  $sModel
     * @return \Illuminate\Http\Response
     */
    public function show(Slide_model $sModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sModel  $sModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.slide.edit', [
            "title"        => "Edit Slide - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide"        => Slide_model::where('id', $id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sModel  $sModel
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
            $validasi_data['images'] = $request->file('images')->store('images/slide-banner');
        }
        Slide_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/slide-banner')->with('success-slide', 'Slide Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sModel  $sModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus File
        $getFile = Slide_model::where('id', $id)->get();
        if ($getFile[0]->images) {
            Storage::delete($getFile[0]->images);
        }

        // Menghapus Data
        Slide_model::where('id', $id)->delete();
        return redirect('/main-dashboard/slide-banner')->with('success-slide', 'Slide Berhasil Dihapus');
    }
}
