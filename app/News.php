<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Member;

class News extends Model
{
    protected $table = "news";
    protected $primaryKey = "news_id";

    function category() {
        return $this->hasOne(Category::class, 'category_id');
    }

    function member() {
        return $this->hasOne(Member::class, 'member_id');
    }
}
