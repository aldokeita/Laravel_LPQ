<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal','jam_mulai','jam_akhir','kelas_id'
    ];

    public function kelas()  {
        return $this->hasOne(kelas::class,'id','kelas_id');
    }
}
