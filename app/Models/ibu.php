<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ibu extends Model
{
    use SoftDeletes;

    protected $table = "ibu";

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'golongan_darah',
        'riwayat_kehamilan',
        'tanggal_persalinan'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function anak()
    {
        return $this->hasMany(Anak::class);
    }
}
