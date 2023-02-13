<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BegituSulid extends Model
{
    use HasFactory;

    protected $table = 'tabungan_tabels';
    protected $fillable = ['Nama','Nis','Rayon', 'Uang'];
}
