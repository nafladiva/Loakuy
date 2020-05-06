<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = "iklan";
    
    protected $fillable = [
        'user_id', 'judul', 'gambar', 'harga', 'kondisi', 'alasan', 'deskripsi',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
