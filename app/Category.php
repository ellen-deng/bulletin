<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = "category_id";
    public $timestamps= false;

    function news(){
        return $this->hasMany(News::class, 'category_id');
    }

}
