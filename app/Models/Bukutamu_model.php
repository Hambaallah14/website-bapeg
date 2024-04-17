<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukutamu_model extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'device', 'komentar'];
    protected $guarded  = ['id'];
}
