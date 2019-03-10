<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [

        'úser_id' , 'friend_id'
    ];
}
