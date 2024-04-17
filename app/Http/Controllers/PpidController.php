<?php

namespace App\Http\Controllers;

use App\Models\Ppid_model;
use App\Models\Sifatinformasi_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PpidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ppid.index', [
            "title"        => "PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "ppid"         => Ppid_model::join('sifatinformasi_models', 'sifatinformasi_models.id', '=', 'ppid_models.kategori_id')->select('ppid_models.id', 'ppid_models.tanggal', 'ppid_models.title', 'sifatinformasi_models.kategori', 'ppid_models.files')->orderBy('ppid_models.id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ppid.create', [
            "title"        => "Tambah PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "kategori"     => Sifatinformasi_model::all()

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
            'kategori_id' => 'required|min:1',
            'tanggal'     => 'required',
            'title'       => 'required|unique:ppid_models',
            'konten'      => 'required',
            'files'       => 'required|file|file|max:5120'
        ]);

        if ($request->file('files')) {
            $validasi_data['files'] = $request->file('files')->store('documents/ppid');
        }

        Ppid_model::create($validasi_data);
        return redirect('/main-dashboard/informasi/ppid')->with('success-ppid', 'PPID Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppid  $ppid
     * @return \Illuminate\Http\Response
     */
    public function show(Ppid_model $ppid)
    {

        return view('dashboard.ppid.show', [
            "title"        => "PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "ppid"         => $ppid,
            // "kategori"     => Sifatinformasi_model::where('id', $ppid->kategori_id)->get()
            // "a"     => $ppid::join('sifatinformasi_models', 'ppid_models.kategori_id', '=', 'sifatinformasi_models.id')->where('ppid_models.id', $ppid->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppid  $ppid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.ppid.edit', [
            "title"        => "Edit PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "ppid"         => Ppid_model::where('id', $id)->get(),
            "kategori"     => Sifatinformasi_model::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppid  $ppid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi_data = $request->validate([
            'kategori_id' => 'required',
            'tanggal'     => 'required',
            'title'       => 'required',
            'konten'      => 'required',
            'files'      => 'file|file|max:5120'
        ]);

        if ($request->file('files')) {
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validasi_data['files'] = $request->file('files')->store('documents/ppid');
        }
        Ppid_model::where('id', $id)->update($validasi_data);
        return redirect('/main-dashboard/informasi/ppid')->with('success-ppid', 'PPID Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppid  $ppid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus File
        $getFile = Ppid_model::where('id', $id)->get();
        if ($getFile[0]->files) {
            Storage::delete($getFile[0]->files);
        }

        // Menghapus Data
        Ppid_model::where('id', $id)->delete();
        return redirect('/main-dashboard/informasi/ppid')->with('success-ppid', 'PPID Berhasil Dihapus');
    }
}
