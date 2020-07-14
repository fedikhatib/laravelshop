<?php

namespace App;
use App\PostCategory;

use Illuminate\Database\Eloquent\Model;


class Post extends Model

{
    public function category(){

        return $this->belongsTo(PostCategory::class);
    }
    
}
