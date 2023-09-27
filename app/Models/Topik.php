<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topik extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $fillable =
        [
            'judul',
            'dosen',
            'status',
        ];

    public function peserta(){
        return $this->hasMany(PesertaTopik::class, 'id_topik', 'id');
    }
}
