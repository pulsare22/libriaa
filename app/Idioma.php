<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "idioma";
    protected $primary_key = "id_idioma";
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
