<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nis', 'tanggal_lahir', 'alamat', 'email', 'user_id', 'published_at','jenis_kelamin'
    ];

    protected $dates = ['published_at'];

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
