<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppid_model extends Model
{
    use HasFactory;
    protected $fillable = ['kategori_id', 'tanggal', 'title', 'konten', 'files'];
    protected $guarded  = ['id'];

    public function scopeFilterPpid($query, array $filters)
    {

        $query->when($filters['kategori-search'] ?? false, function ($query, $kategorisearch) {
            return $query->where('kategori', 'like', '%' . $kategorisearch . '%');
        });


        $query->when($filters['ppid-search'] ?? false, function ($query, $ppidsearch) {
            return $query->where('title', 'like', '%' . $ppidsearch . '%')
                ->orWhere('konten', 'like', '%' . $ppidsearch . '%');
        });
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
