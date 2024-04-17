<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Slide_model;
use App\Models\Berita_model;
use App\Models\Bukutamu_model;
use App\Models\Pengumuman_model;
use App\Models\Ppid_model;
use App\Models\VisiMisi_Model;

class CDashboard extends Controller
{
    public function index()
    {
        return view('dashboard/home/index', [
            "title"        => "Dashboard - Badan Kepegawaian Provinsi Sumatera Utara",
            "berita"       => Berita_model::all(),
            "pengumuman"   => Pengumuman_model::all(),
            "ppid"         => Ppid_model::all(),
            "bukutamu"     => Bukutamu_model::all(),
        ]);
    }
}
