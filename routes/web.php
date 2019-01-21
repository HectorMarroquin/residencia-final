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
/* Rutas Para el controlador de enviar */ 
Route::get('Enviar', ['as' => 'Enviar.index', 'uses' => 'Empren\EnvioController@index']);

Route::get('Enviar/create', ['as' => 'Enviar.create', 'uses' => 'Empren\EnvioController@create']);

Route::post('Enviar', ['as' => 'Enviar.store', 'uses' => 'Empren\EnvioController@store']);
Route::post('Enviars', ['as' => 'Enviar.entregados', 'uses' => 'Empren\EnvioController@entregados']);

Route::post('Enviarss', ['as' => 'Enviar.entregatres', 'uses' => 'Empren\EnvioController@entregatres']);

Route::get('Enviar/{pro}/{fase}', ['as' => 'Enviar.show', 'uses' => 'Empren\EnvioController@show']);
Route::get('Enviar/{id}/edit', ['as' => 'Enviar.edit', 'uses' => 'Empren\EnvioController@edit']);
Route::put('Enviar/{id}', ['as' => 'Enviar.update', 'uses' => 'Empren\EnvioController@update']);
Route::delete('Enviar/{id}', ['as' => 'Enviar.destroy', 'uses' => 'Empren\EnvioController@destroy']);

   

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
Route::resource('actividades','Admin\ActiController');
Route::resource('asesores','Admin\AsesorController'); 
Route::resource('asignaciones','Admin\AsignaController'); 
Route::resource('emprendedores','Admin\EmpreController'); 
Route::resource('historial','Admin\HistoController'); 

/*Hector*/



/*Eaz*/ 
//Rutas optimisadas 

Route::resource('projects','Asesor\ProjectController'); 
Route::resource('asesor','Asesor\AsesorController');




//eaz
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

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');

Route::get('form_enviar_correo', 'CorreoController@crear');
Route::post('enviar_correo', 'CorreoController@enviar');
Route::post('cargar_archivo_correo', 'CorreoController@store');


Route::get('/email1',['as'=>'email', function () {
    return view('email/form_mail');
}]);

Route::get('/email2',['as'=>'email2', function () {
    return view('email/plantilla_correo');
}]);

//Route::get('Email','EmailController');
Route::resource('emails','EmailController'); 
Route::resource('chat', 'ChatViewController');

Route::get('/mensajes',['as'=>'mensajes', function () {
    return view('Asesor/mensajes');
}]);




