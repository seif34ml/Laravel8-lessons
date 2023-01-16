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


         return $this->belongsTo(User::class,);

 }


 public function Comments()
 {



         return $this->hasMany(Comment::class,'slug','slug');
 }



 public function scopeFilters($query,array $filters)
 {


if(count($filters)>0){
$query->where(
    fn($query)=>
    $query->where("title","like",'%'.$filters['search'].'%')->orWhere("desc","like",'%'.$filters['search'].'%'))->where('category_id','like',$filters['category']);



    // ->orWhere("desc","like",'%'.$filters['search'].'%')->whereHas('category_id','like',$filters['category']);

        //  $query->when($filters['category']??false,fn($query,$category)=>$query-> where('category_id',$category));
        }



}
}
