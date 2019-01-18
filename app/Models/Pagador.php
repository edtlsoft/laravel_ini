<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagador extends Model
{
    protected $fillable = ['codigo', 'nit', 'razon_social'];
}
