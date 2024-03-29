<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #One to many Inverse belongs to

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);

    }
}
