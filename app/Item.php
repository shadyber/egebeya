<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = [
        'name', 'detail', 'price','category','subcategory','user_id','photo','status','tags','badge','brand','model','spec','qnt'
    ];

      public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
