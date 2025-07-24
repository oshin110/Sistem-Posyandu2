<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imunisasi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'anak_id',
        'jenis_imunisasi',
        'tanggal',
        'keterangan'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
