<?php
namespace App\Models;
use Illuminate\Support\Facades\File;
class Post

{
    public  static function findAll()
    {
     return File::files(resource_path("posts"));
    }
   public  static function findSlug($slug)
   {
    return cache()->remember("posts.{$slug}", 10000,fn()=>file_get_contents(resource_path("posts/{$slug}.html")));
   }
}

?>
