<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libro";
    protected $primary_key = "id_libro";
    protected $fillable = [
	    	'titulo',
			'edicion',
			'paginas',
			'precio',
			'isbn',
			'editorial_id_editorial',
			'idioma_id_idioma',
			'descuento',
			'imagen'
    ];
    public $timestamps = false;
}
