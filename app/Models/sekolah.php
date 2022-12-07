<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    // public $fillable = [
    //     'nama',
    //     'email',
    //     'alamat',
    //     'jenis_sekolah',
    //     'aktif'
    // ];

    protected $table='sekolah';
}
