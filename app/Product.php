<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price', 'category_id'];

    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
