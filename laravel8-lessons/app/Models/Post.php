<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

  public function category(Type $var = null)
 {


         return $this->belongsTo(Category::class);

 }
 public function User()
 {


         return $this->belongsTo(User::class);

 }


 public function scopeFilters($query,array $filters)
 {
     if($filters['search']!==null){

            $query->where("title","like",'%'.request('search').'%')
    ->orWhere("desc","like",'%'.request('search').'%');
         }

 }

}
