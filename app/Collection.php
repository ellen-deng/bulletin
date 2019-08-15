<?php

namespace App;
use App\News;
use App\Member;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = "collection";
    protected $primaryKey = "collection_id";
    public $timestamps= false;

    function member() {
        return $this->hasOne(Member::class, 'member_id');
    }

    function news(){
        return $this->hasOne(News::class, 'category_id');
    }

    function category() {
        return $this->hasOne(Category::class, 'category_id');
    }
}
