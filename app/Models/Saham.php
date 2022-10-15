<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saham extends Model
{
    use HasFactory;

    protected $table = 'sahams';
    protected $fillable = ['id', 'Kode_Saham', 'Nama', 'Saham', 'Papan_Pencatatan'];
}
