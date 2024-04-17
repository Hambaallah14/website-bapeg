<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugasbidang_model extends Model
{
    use HasFactory;
    protected $fillable = ['bidang_id', 'tugas'];
    protected $guarded  = ['id'];
}
