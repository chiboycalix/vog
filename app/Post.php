<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Schema;
use Illuminate\Database\Schema\Blueprint;

class Post extends Model
{
    public static function migrate(){
        Schema::dropIfExists('posts');
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->string('photo');
            $table->timestamps();
        });
        echo 'Post table created successfully';
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
         public function comments()
         {
               return $this->hasMany('App\Comment');
         }
        public function category()
        {
            return $this->belongsTo('App\Category');
         }
        
}

