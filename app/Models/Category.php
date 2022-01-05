<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'master.category';
    public $timestamps = false;
    public function category()
    {
        return $this->hasMany(Category::class,'category_id','id');
    }
}
