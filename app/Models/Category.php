<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function posts()
    {
        return $this->hasMany('App\Models\Posts','category_id');
    }
     public function videos()
    {
        return $this->hasMany('App\Models\Videos','category_id');
    }
}
