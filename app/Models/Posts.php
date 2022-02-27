<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primayKey = 'id';
    protected $fillable = ['title','potrait'];
    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
