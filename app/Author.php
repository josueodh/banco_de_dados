<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
