<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPublik extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'klasifikasi',
        'judul',
        'ringkasan',
        'file',
        'filesize'
    ];

    public function user() {
        $this->belongsTo(User::class);
    }
}