<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    //
    public $timestamps = false;
    protected $table = 'hashtags';
    protected $fillable = ['rcode','HASHTAG'];
}
