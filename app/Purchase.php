<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['cart'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
