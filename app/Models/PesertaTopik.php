<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaTopik extends Model
{
    use HasFactory;

    protected $table = 'peserta_topik';

    protected $fillable = [
        'id_topik',
        'id_user',
    ];

    public function topik()
    {
        return $this->belongsTo(Topik::class, 'id_topik', 'id');
    }
}
