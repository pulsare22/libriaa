<?php 
namespace App\Repositories;

use App\Libro;

class RepositoryLibro
{
	static function store($request, $path)
	{
		$libro = new Libro;
		$libro->titulo = $request->titulo;
		$libro->edicion = $request->edicion;
		$libro->paginas = $request->paginas;
		$libro->precio = $request->precio;
		$libro->isbn = $request->isbn;
		$libro->editorial_id_editorial = $request->editorial_id_editorial;
		$libro->idioma_id_idioma = $request->idioma_id_idioma;
		$libro->descuento = $request->descuento;
		$libro->imagen = $path;
		if($libro->save()){
			return $libro; // toda la instancia 
		}
		return false;
	}
}