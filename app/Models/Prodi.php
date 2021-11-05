<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $primaryKey = 'name';
    protected $keyType = 'string';

    protected $fillable = ['name', 'head_department', 'total_sks', 'total_student', 'date_founded', 'description'];

    public function mahasiswas(){
        return $this->hasMany(Mahasiswa::class, 'prodi', 'name');
    }
    
}
