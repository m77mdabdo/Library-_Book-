<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // protected $table = "test" ;
    use HasFactory;
    protected $fillable = [
        "name",
        "desc",
        "image",
    ];

    public function books()
    {
        return $this->hasMany(BOOK::class);
    }
}