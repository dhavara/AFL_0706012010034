<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'email', 'religion', 'birth_date', 'birth_city', 'city', 'telephone', 'prodi'];
}
