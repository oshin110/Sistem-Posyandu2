<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penimbangan extends Model
{
    /** @use HasFactory<\Database\Factories\PenimbanganFactory> */
    use HasFactory;

    protected $table = "penimbangans";

    protected $fillable = [
        "anak_id",
        'tanggal',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function anak(){
        return $this->belongsTo(anak::class, 'anak_id');
    }
}
