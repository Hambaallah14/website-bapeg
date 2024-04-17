<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widyaiswara extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatanwidyaiswara_id',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_telp',
        'email',
        'npwp',
        'no_rekening'
    ];

    protected $guarded = ['id'];
}
