<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSubCategory extends Model
{
    //
    public function category()
    {
        return $this->belongsTo('App\Category');

    }
   public function counted(){
        return count(ItemSubCategory::all());
   }

}
