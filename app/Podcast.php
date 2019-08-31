<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
    ];

//    private function setUrlAttribute($file){
//        return $file->store('podcasts');
//    }
}
