<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishingCompany extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
