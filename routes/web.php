<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*AQUI INICIA LAS RUTAS DE ALBERT*/ 
Route::get('/Home', ['as' => 'Empren-home', 'uses' => 'Empren\EmprendedorController@Home']);
   

Route::get('/Observaciones', ['as' => 'Emprend-observa', 'uses' => 'Empren\EmprendedorController@Obervacion' ]); 

/* valida la peticiones de registro de emprendedores */ 
Route::post('registro', 'Empren\EmprendedorController@Validar' ); 

/*Registro de emprendedor con las ruta */
Route::resource('Registro', 'Empren\EmprendedorRegisController');
Route::resource('AlProyecto', 'Empren\ProyectoRegisController');
Route::resource('Lista', 'Empren\ListEntregaController');
Route::resource('Entregas', 'Empren\EntregasController');
Route::resource('Archivo', 'Empren\ArchivosController');
Route::resource('Estado', 'Empren\EstatusController');
/*AQUI TERMINA LAS RUTAS DE ALBERT*/


/*Hector*/

Route::get('/dashboard','Admin\AdminController@Admin')->name('HomeAdmin');
Route::get('/Admin-historial','Admin\AdminController@Admin')->name('Ver_historial');
Route::resource('actividades','Admin\ActiController');
Route::resource('asesores','Admin\AsesorController'); 
Route::resource('asignaciones','Admin\AsignaController'); 
Route::resource('emprendedores','Admin\EmpreController'); 
Route::resource('historial','Admin\HistoController'); 

/*Hector*/



/*Eaz*/ 
Route::get('/proyectos',['as'=>'proyectos', function () {
    return view('Asesor/proyectos');
}]);

Route::get('/verproyectos',[ 'as' => 'verproyectos', function () {
    return view('Asesor/ver-proyecto');
}]);

Route::get('/emprendedoresAs',[ 'as' => 'emprendedoresAs', function () {
    return view('Asesor/emprendedoresAs');
}]);

Route::get('/infoAlta',['as'=>'infoAlta', function () {
    return view('Asesor/infoAltaProjecto');
}]); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');