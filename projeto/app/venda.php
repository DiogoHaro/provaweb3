<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    protected $fillable = ['valor','produto','quantidade'];
}
