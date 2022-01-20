<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
