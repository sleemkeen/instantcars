<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    
    protected $fillable = [
        'carid','driverid'
    ];

    public function user()
    {
        $this->belongsTo('App\Post', 'driverid');
    }

     public function post()
    {
        $this->belongsTo('App\User', 'carid');
    }



}
