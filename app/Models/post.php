<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(category::class);

    }  public function user(){

        return $this->belongsTo(User::class);

    }

        public function tags(){

        return $this->belongsToMany(Tag::class,'post_tag_id','post_id','tag_id');

    }
}
