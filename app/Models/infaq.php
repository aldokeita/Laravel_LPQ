<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infaq extends Model
{
    use HasFactory;

    protected $fillable =[
        'siswa_id',
        'nominal',
        'bulan',
        'tahun',
        'payment'
    ];

    public function siswa(){
        return $this->hasOne(siswa::class,'id','siswa_id');
    }
}
