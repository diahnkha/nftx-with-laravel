<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    // public $fillable = [
    //     'nama',
    //     'email',
    //     'password',
    //     'role',
    //     'aktif'
    // ];

    protected $table='user';
}
