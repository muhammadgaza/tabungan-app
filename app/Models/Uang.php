<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;
    protected $table = 'tabungan';
    protected $fillable = ['nis','nama','rayon','uang','uangphp'];
}
