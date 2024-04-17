<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah_model extends Model
{
    use HasFactory;
    protected $fillable = ['konten', 'images'];
    protected $guarded  = ['id'];
}
