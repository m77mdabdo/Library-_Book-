<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // protected $table = "test" ;
    protected $fillable = [
        "name",
        "desc",
        "image",
    ];
}