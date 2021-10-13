<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'series', 'price', 'description', 'type', 'thumb', 'sale_date'];
}
