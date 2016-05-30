<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = "autor";
    protected $primary_key = "id_autor";
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
