<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang_model extends Model
{
    use HasFactory;
    protected $fillable = ['bidang'];
    protected $guarded  = ['id'];
}
