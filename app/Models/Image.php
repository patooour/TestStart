<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class ,'category_id','id');
    }

    public function image(){
        return $this->hasOne(Image::class ,'image_id','id');
    }

    public function images(){
        return $this->hasmany(Image::class ,'image_id','id');
    }
}
