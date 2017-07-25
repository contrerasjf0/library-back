<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'name',
        'autor',
        'category_id',
        'published_date',
        'borrowed'

    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
