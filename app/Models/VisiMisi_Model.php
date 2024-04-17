<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi_Model extends Model
{
    use HasFactory;
    protected $fillable = ['visi', 'misi', 'imagegub', 'imagewagub'];
    protected $guarded  = ['id'];
}
