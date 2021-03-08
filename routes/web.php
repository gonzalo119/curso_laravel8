<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;



Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria= null) {
    if ($categoria) {
        return "tu estas en el curso: $curso, de la categoria: $categoria";
    }else{
        return "binevenido al curso: $curso  (sin categoria)";
    } 
});*/

