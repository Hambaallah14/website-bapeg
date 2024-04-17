<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Slide_model;
use App\Models\Berita_model;
use App\Models\Bukutamu_model;
use App\Models\Pengumuman_model;
use App\Models\Ppid_model;
use App\Models\Sifatinformasi_model;
use App\Models\Sejarah_model;
use App\Models\Strukturorganisasi_Model;
use App\Models\VisiMisi_Model;
use App\Models\Bidang_model;
use App\Models\Tugasbidang_model;
use App\Models\Pensiun_model;
use App\Models\Kenaikanpangkat_model;
use App\Models\Gajiberkala_model;
use App\Models\Mutasi_model;
use App\Models\Izintugasbelajar_model;
use App\Models\Jabatanfungsional_model;
use App\Models\Pencantumangelar_model;
use App\Models\Satyalancana_model;
use App\Models\Hukumandisiplin_model;
use App\Models\Cuti_model;


class CWebsites extends Controller
{
    public function index()
    {
        return view('website/main', [
            "title"        => "Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "berita"       => Berita_model::limit(2)->orderBy('id', 'desc')->get(),
            "pengumuman"   => Pengumuman_model::limit(2)->orderBy('id', 'desc')->get(),

        ]);
    }

    public function sejarah()
    {
        return view('website.profil.sejarah.index', [
            "title"        => "Sejarah - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "sejarah"      => Sejarah_model::all(),
        ]);
    }

    public function struktur_organisasi()
    {
        return view('website.profil.struktur_organisasi.index', [
            "title"        => "Struktur Organisasi - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "struktur"     => Strukturorganisasi_Model::all(),
        ]);
    }

    public function visi_misi()
    {
        return view('website.profil.visi-misi.index', [
            "title"        => "Visi Misi - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "visi_misi"    => VisiMisi_Model::all()
        ]);
    }

    public function tupoksi()
    {
        return view('website.profil.tupoksi.index', [
            "title"        => "Tugas Pokok dan Fungsi - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "bidang"       => Bidang_model::all()
        ]);
    }



    public function berita()
    {
        return view('website/berita/berita', [
            "title"        => "Berita - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "berita"       => Berita_model::latest()->Filterberita(request(['berita-search']))->orderBy('tanggal', 'desc')->paginate(4)->withQueryString()

        ]);
    }

    public function lihat_berita($slug)
    {
        return view('website/berita/lihat_berita', [
            "title"        => "Berita - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "content"      => Berita_model::where('slug', $slug)->get()
        ]);
    }

    public function pengumuman()
    {
        return view('website.pengumuman.pengumuman', [
            "title"        => "Pengumuman - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "pengumuman"   => Pengumuman_model::latest()->FilterPengumuman(request(['pengumuman-search']))->orderBy('id', 'desc')->paginate(4)->withQueryString(),

        ]);
    }

    public function struktur_ppid()
    {
        return view('website/ppid/struktur', [
            "title"        => "PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
        ]);
    }

    public function informasi_ppid()
    {
        return view('website.ppid.informasi', [
            "title"        => "PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "kategori"     => Sifatinformasi_model::all(),
            "ppid"         => Ppid_model::join('sifatinformasi_models', 'sifatinformasi_models.id', '=', 'ppid_models.kategori_id')->select('sifatinformasi_models.kategori', 'ppid_models.*')->FilterPpid(request(['ppid-search', 'kategori-search']))->orderBy('ppid_models.id', 'desc')->paginate(6)->withQueryString()
        ]);
    }

    public function lihat_informasi_ppid($id)
    {
        return view('website.ppid.lihat_informasi_ppid', [
            "title"        => "PPID - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "content"      => Ppid_model::join('sifatinformasi_models', 'sifatinformasi_models.id', '=', 'ppid_models.kategori_id')->select('sifatinformasi_models.kategori', 'ppid_models.*')->where('ppid_models.id', $id)->get()
        ]);
    }



    // LAYANAN
    public function pensiun()
    {
        return view('website.layanan.pensiun.index', [
            "title"        => "Pensiun - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Pensiun_model::all()
        ]);
    }

    public function kenaikan_pangkat()
    {
        return view('website.layanan.kenaikan-pangkat.index', [
            "title"        => "Kenaikan Pangkat - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Kenaikanpangkat_model::all()
        ]);
    }

    public function gaji_berkala()
    {
        return view('website.layanan.gaji-berkala.index', [
            "title"        => "Gaji Berkala - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Gajiberkala_model::all()
        ]);
    }

    public function mutasi()
    {
        return view('website.layanan.mutasi.index', [
            "title"        => "Mutasi - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Mutasi_model::all()
        ]);
    }

    public function izin_tugas_belajar()
    {
        return view('website.layanan.izin_tugas_belajar.index', [
            "title"        => "Izin & Tugas Belajar - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Izintugasbelajar_model::all()
        ]);
    }

    public function jabatan_fungsional()
    {
        return view('website.layanan.jafung.index', [
            "title"        => "Jabatan Fungsional - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Jabatanfungsional_model::all()
        ]);
    }

    public function pencantuman_gelar()
    {
        return view('website.layanan.pencantuman-gelar.index', [
            "title"        => "Pencantuman Gelar - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Pencantumangelar_model::all()
        ]);
    }

    public function satyalancana()
    {
        return view('website.layanan.satyalancana.index', [
            "title"        => "Satyalancana - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Satyalancana_model::all()
        ]);
    }

    public function hukuman_disiplin()
    {
        return view('website.layanan.hukuman-disiplin.index', [
            "title"        => "Hukuman Disiplin - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Hukumandisiplin_model::all()
        ]);
    }

    public function cuti()
    {
        return view('website.layanan.cuti.index', [
            "title"        => "Cuti - Badan Kepegawaian Provinsi Sumatera Utara",
            "slide_banner" => Slide_model::orderBy('id', 'desc')->get(),
            "data"         => Cuti_model::all()
        ]);
    }
}
