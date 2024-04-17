<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_model extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'konten', 'tanggal', 'images', 'slug'];
    protected $guarded  = ['id'];

    public function scopeFilterberita($query, array $filters)
    {

        // if (isset($filters['berita-search']) ? $filters['berita-search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['berita-search'] . '%')
        //         ->orWhere('content', 'like', '%' . $filters['berita-search'] . '%');
        // }

        $query->when($filters['berita-search'] ?? false, function ($query, $beritasearch) {
            return $query->where('title', 'like', '%' . $beritasearch . '%')
                ->orWhere('konten', 'like', '%' . $beritasearch . '%');
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
