<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $fillable = [
        'book_id', 'borrower_id',
    ];
}
