<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Village;
class Desa extends Village
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'villages'; // Sesuaikan dengan nama tabel yang digunakan oleh paket laravolt/indonesia
    protected $fillable = ['code','district_code','name','meta' ];
    protected $casts = [
        'meta' => 'array',
    ];
}
