<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman_model extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'tanggal', 'files'];
    protected $guarded  = ['id'];

    public function scopeFilterpengumuman($query, array $filters)
    {
        $query->when($filters['pengumuman-search'] ?? false, function ($query, $pengumumansearch) {
            return $query->where('title', 'like', '%' . $pengumumansearch . '%');
        });
    }
}
