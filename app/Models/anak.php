<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anak extends Model
{
    use SoftDeletes;

    protected $table = "anak";

    protected $fillable = [
        'ibu_id',
        'nik',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'berat_lahir',
        'panjang_lahir',
        'kondisi_lahir',
        'golongan_darah',
        'riwayat_penyakit',
        'no_akta',
        'foto'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }

    public function penimbangan()
    {
        return $this->hasMany(Penimbangan::class);
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
