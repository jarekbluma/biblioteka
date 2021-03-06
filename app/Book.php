<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'autor', 'tytul', 'wydawnictwo', 'rok', 'dateofborrow', 'dateofreturn', 'borrower',
    ];

    
}
