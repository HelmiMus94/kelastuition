<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    
    protected $fillable = [
        'nama_subjek',
        'penerangan', 
        'nama_cikgu'
    ];
}
