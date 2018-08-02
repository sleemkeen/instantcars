<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

     protected $fillable = [
         'frontimage','backimagecar','sideimagecar','platenumber','cartype','carmodel','year','geartype','location','duration','cardoc','uid'
     ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    
}

