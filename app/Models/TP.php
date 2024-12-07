<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TP extends Model
{
    use HasFactory;
    protected $table = 'TP';
    protected $fillable = ['judul', 'sub_judul', 'kategori', 'tanggal_post', 'deadline', 'deskripsi'];
}
