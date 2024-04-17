<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hukumandisiplin_model extends Model
{
    use HasFactory;
    protected $fillable = ['images'];
    protected $guarded  = ['id'];
}
