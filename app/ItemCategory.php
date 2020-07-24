<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    //
    protected $fillable = [
        'name', 'detail'
    ];

    public function items()
    {
        return $this->hasMany('App\Item');
    }
    public function subcategory()
    {
        return $this->hasMany('App\ItemSubCategory');
    }
}
