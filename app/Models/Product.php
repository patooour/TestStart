<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class ,'category_id','id');
    }

    public function image(){
        return $this->belongsTo(Image::class ,'image_id','id');
    }

    public function images(){
        return $this->hasmany(Image::class ,'image_id','id');
    }
}
