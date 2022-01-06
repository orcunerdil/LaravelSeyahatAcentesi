<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
      'parent',
    ];

    #One to Many

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    #One To Many Iverse - Ters
    # Her bir kategorinin bir tane parent'ı var
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    #One To Many
    #Her kategorinin birden çok alt kategorisi var
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
