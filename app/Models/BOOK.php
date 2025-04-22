<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BOOK extends Model
{
    //
    protected $fillable = [
        "title",
        "desc",
        "image",
        "price",
        "category_id",
        "user_id",

    ];
}
