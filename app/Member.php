<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class Member extends Model
{
    protected $table = "member";
    protected $primaryKey = "member_id";
    public $timestamps= false;

    function news(){
        return $this->hasMany(News::class, 'member_id');
    }
}
