<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imunisasi extends Model
{

    protected $fillable = [
        'anak_id',
        'jenis_imunisasi',
        'tanggal',
        'keterangan'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
