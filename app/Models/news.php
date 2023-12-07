<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'photo','category_id','user_id'
    ];
    protected $guarded = 'id';

    public function category(){
        return $this->belongsTo(categories::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
