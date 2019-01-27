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
Route::get('Enviar', 'Empren\EnvioController@index')->name('Enviar.index');
Route::get('Enviar/create', 'Empren\EnvioController@create')->name('Enviar.create');
Route::post('Enviar', 'Empren\EnvioController@store')->name('Enviar.store');
Route::post('Enviars', 'Empren\EnvioController@entregados')->name('Enviar.entregados');
Route::post('Enviarss', 'Empren\EnvioController@entregatres')->name('Enviar.entregatres');
Route::get('Enviar/{pro}/{fase}', 'Empren\EnvioController@show')->name('Enviar.show');
Route::get('Enviar/{id}/edit', 'Empren\EnvioController@edit')->name('Enviar.edit');
Route::put('Enviar/{id}', 'Empren\EnvioController@update')->name('Enviar.update');
Route::delete('Enviar/{id}', 'Empren\EnvioController@destroy')->name('Enviar.destroy');
Route::get('/Observaciones', 'Empren\EmprendedorController@Obervacion')->name('Emprend-observa'); 

/* valida la peticiones de registro de emprendedores */ 
Route::post('registro', 'Empren\EmprendedorController@Validar' ); 

/*Registro de emprendedor con las ruta */
Route::resource('Registro', 'Empren\EmprendedorRegisController');
Route::resource('AlProyecto', 'Empren\ProyectoRegisController');
Route::resource('Lista', 'Empren\ListEntregaController');
Route::resource('Entregas', 'Empren\EntregasController');
Route::resource('Archivo', 'Empren\ArchivosController');
Route::resource('Estado', 'Empren\EstatusController');
Route::resource('Emprendedor', 'Empren\EmpreController');
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
Route::get('/homeAsesor','Asesor\homeController@asesor')->name('HomeAsesor');






//eaz

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*chat*/

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
/*/chat*/



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




