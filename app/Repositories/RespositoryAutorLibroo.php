<?php 
namespace App\Repositories;
use DB;

class RepositoryAutorLibro
{
	static function InsertAutoresLibros($autores, $libro)
	{
		foreach ($autores as $id_autor) {
			$autorlibro = \DB::table('libro_has_autor')-> insert([
					'libro_id_libro' => $libro->id_libro,
					'autor_id_autor' => $id_autor
				]);
		}
		return true;
	}
}