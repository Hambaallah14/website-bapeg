<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Pelatihan::factory(5)->create();

        \App\Models\Berita_model::create([
            'title' => 'Lepas Keberangkatan 27 Atlet Ikut Kejurnas Surakarta, Gubernur Edy Rahmayadi Bakar Semangat Atlet',
            'konten'      => 'TEST123',
            'tanggal'      => date('Y-m-d'),
            'images'      => '160623.jpg',
            'slug'        => 'lepas-keberangkatan-27-Atlet-Ikut-Kejurnas-Surakarta'
        ]);
        \App\Models\Berita_model::create([
            'title' => 'Silaturahmi dengan Alim Ulama dan Asatidz, Ijeck: Jabatan Bisa Berakhir, Silaturahmi Selama-lamanya',
            'konten'      => 'TEST123',
            'tanggal'      => date('Y-m-d'),
            'images'      => '16062301.jpg',
            'slug'        => 'silaturahmi-dengan-alim-ulama-dan-asatidz'
        ]);
        \App\Models\Berita_model::create([
            'title' => 'Pembukaan PRSU ke-49 Meriah, Gubernur Edy Rahmayadi Sebut PRSU Milik Seluruh Rakyat Sumut',
            'konten'      => 'TEST123',
            'tanggal'      => date('Y-m-d'),
            'images'      => '16062302.jpg',
            'slug'        => 'pembukaan-prsu-ke-49-meriah'
        ]);
        \App\Models\Berita_model::create([
            'title' => 'PRSU Jadi Momen Silaturahmi dengan Kepala Daerah Sumut, Edy Rahmayadi Ajak Kolaborasi Sukseskan Target Pembangunan',
            'konten'      => 'TEST123',
            'tanggal'      => date('Y-m-d'),
            'images'      => '16062303.jpg',
            'slug'         => 'prsu-jadi-momen-silaturahmi-dengan-kepala-daerah-sumut'
        ]);
        \App\Models\Berita_model::create([
            'title' => 'Hari Pertama PRSU ke-49 Tahun 2023, Seluruh Stan dan Paviliun Padat Pengunjungs',
            'konten'      => 'TEST123',
            'tanggal'      => date('Y-m-d'),
            'images'      => '16062304.jpg',
            'slug'       => 'hari-pertama-prsu-ke-49-tahun-2023'
        ]);


        \App\Models\Slide_model::create([
            'images' => 'kebangkitan-nasional.jpeg'
        ]);
        \App\Models\Slide_model::create([
            'images' => 'harlah-pancasila.jpeg'
        ]);
        \App\Models\Slide_model::create([
            'images' => 'prsu.jpeg'
        ]);

        \App\Models\Pengumuman_model::create([
            'title' => 'Pengumuman Hasil Seleksi Administrasi dan Perubahan Jadwal Wawancara dan Rekam Jejak Peserta Seleksi Pengisian Jabatan Pimpinan Tinggi Pratama di Lingkungan Pemerintah Provinsi Sumatera Utara',
            'tanggal'      => date('Y-m-d'),
            'files'      => 'PENGUMUMAN_HASIL_SELEKSI_ADMINISTRASI.pdf'
        ]);
        \App\Models\Pengumuman_model::create([
            'title' => 'Pengumuman Perubahan Jadwal Pelaksanaan Seleksi Pengisian Jabatan Pimpinan Tinggi Pratama Kepala Dinas Pekerjaan Umum dan Penataan Ruang Provinsi Sumatera Utara',
            'tanggal'      => date('Y-m-d'),
            'files'      => 'PERUBAHAN_JADWAL_SELTER_PUPR_1.pdf'
        ]);
        \App\Models\Pengumuman_model::create([
            'title' => 'Pengumuman Seleksi Pengisian Jabatan Pimpinan Tinggi Pratama di Lingkungan Pemerintah Provinsi Sumatera Utara',
            'tanggal'      => date('Y-m-d'),
            'files'      => 'PENGUMUMAN_SELTER_JPTP_2023_-_2.pdf'
        ]);

        \App\Models\Sifatinformasi_model::create([
            'kategori' => 'Setiap Saat'
        ]);

        \App\Models\Sifatinformasi_model::create([
            'kategori' => 'Berkala'
        ]);
        \App\Models\Sifatinformasi_model::create([
            'kategori' => 'Serta Merta'
        ]);

        \App\Models\Ppid_model::create([
            'tanggal'      => date('Y-m-d'),
            'kategori_id'  =>  1,
            'title'        => 'Test 123',
            'content'      => 'TEST123',
            'files'        => '200623.pdf'
        ]);

        \App\Models\Ppid_model::create([
            'tanggal'      => date('Y-m-d'),
            'kategori_id'  =>  1,
            'title'        => 'Test 1234',
            'content'      => 'TEST1234',
            'files'        => '2006231.pdf'
        ]);
    }
}
