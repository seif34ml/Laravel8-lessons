<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;  protected $fillable = [
        'id',
        'comment',
        'user_id',
        'slug'

    ];

    public function post(){
        return $this->belongsTo(Post::class,'slug','slug');
    }

    public function owner(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
