<?php

namespace Bondstein\Crud\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'message'];
}
