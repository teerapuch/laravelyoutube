<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    // Whitelist
    protected $fillable = [
        'title', 'isbn', 'price', 'author', 'publisher', 'created_at', 'updated_at'
    ];

    // Blackist
    // protected $guarded = ['id'];
}
