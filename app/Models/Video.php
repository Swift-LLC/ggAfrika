<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
