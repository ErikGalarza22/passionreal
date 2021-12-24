<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ReporteController;
use App\Mail\MensajeRecibido;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

//VISTAS DE VISITANTE
Route::get('/', [HomeController::class, 'index'])->middleware('visitante')->name('home.inicio');
Route::post('/post-validar-cuenta', [HomeController::class, 'postValidarCuenta'])->middleware('visitante')->name('home.postValidarCuenta');
Route::get('/validar-cuenta',[HomeController::class,'getValidarCuenta'])->middleware('visitante')->name('home.getValidarCuenta');
Route::post('/validacion-cuenta',[HomeController::class,'validacionCuenta'])->middleware('visitante')->name('home.validacionCuenta');
Route::get('/detalle/{id}', [HomeController::class, 'detalleAnuncio'])->middleware('visitante')->name('home.detalle');
Route::get('/categoria/{id}', [HomeController::class, 'findByCategoria'])->middleware('visitante')->name('home.find_by_categoria');
Route::get('/categorias',[HomeController::class, 'findAllCategorias'])->middleware('visitante')->name('home.findAllCategorias');
Route::get('/buscar',[HomeController::class, 'filtrado'])->middleware('visitante')->name('home.filtrado');
Route::get('/cuenta-baneada',[HomeController::class, 'cuentaBaneada'])->name('home.cuentaBaneada');
Route::get('/recuperar/password',[HomeController::class,'getPrevPasswordReset'])->middleware('visitante')->name('home.getPrevPasswordReset');
Route::post('/recuperar/password',[HomeController::class,'postPasswordReset'])->middleware('visitante')->name('home.postPasswordReset');
Route::post('/prev-recuperar/password',[HomeController::class,'postPrevPasswordReset'])->middleware('visitante')->name('home.postPrevPasswordReset');

//PERSONAS REGISTRADAS
Route::get('/creditos', [ClienteController::class, 'creditos'])->middleware('cliente')->name('cliente.creditos');
Route::get('/mi-cuenta', [ClienteController::class, 'miCuenta'])->middleware('cliente')->name('cliente.miCuenta');
Route::get('/publicar-anuncio', [ClienteController::class, 'crearAnuncio'])->middleware('cliente')->name('cliente.crearAnuncio');
Route::post('/publicar-anuncio', [ClienteController::class, 'guardarAnuncio'])->middleware('cliente')->name('cliente.guardarAnuncio');
Route::get('/mis-anuncios', [ClienteController::class, 'misAnuncios'])->middleware('cliente')->name('cliente.misAnuncios');
Route::post('/editar-perfil',[ClienteController::class,'editarMiPerfil'])->middleware('cliente')->name('cliente.editarMiPerfil');
Route::get('/editar-anuncio/{id}',[ClienteController::class,'editarAnuncio'])->middleware('cliente')->name('cliente.editarAnuncio');
Route::post('/editar-anuncio',[ClienteController::class,'postEditarAnuncio'])->middleware('cliente')->name('cliente.postEditarAnuncio');
Route::get('/retirar-imagen/{id}',[ClienteController::class,'retirarImagen'])->middleware('cliente');
Route::get('/creditos',[ClienteController::class,'creditos'])->middleware('cliente')->name('cliente.creditos');
Route::post('/comprar-credito',[ClienteController::class,'comprarCredito'])->middleware('cliente')->name('cliente.comprarCredito');
Route::get('/anuncio/{id}', [ClienteController::class,'eliminarAnuncio'])->middleware('cliente')->name('cliente.deleteAnuncio');
Route::get('/validar-cuenta2',[ClienteController::class,'validarCuenta'])->middleware('cliente')->name('cliente.validarCuenta');
Route::get('/payments/pay',[PaymentController::class, 'pay'])->name('pay');
Route::get('/datos-cliente/{id}',[OrdenController::class, 'show'])->middleware('cliente');
Route::post('/pasarela',[ClienteController::class,'getPasarela'])->middleware('cliente')->name('cliente.pasarela');
Route::post('/reportar',[ClienteController::class,'reportar'])->middleware('cliente')->name('cliente.reportar');
// Route::get('/contactanos',function(){
//       $correo = new MensajeRecibido; 
//       Mail::to('gamr130898@gmail.com')->send($correo);
//        return "mensaje enviado";
//     });

///NOTIFICACIONES
Route::get('/mensaje',[SmsController::class,'sendMessage'])->name('sms.validarCodigo');
Route::get('/show', [HomeController::class,'show']);
Route::post('/show', [HomeController::class,'storePhoneNumber']);
Route::post('/custom', [HomeController::class,'sendCustomMessage']);

//CLOUDINARY

Route::get('/upload',function(){
    return view('imagen');
});
Route::post('/upload',function (Request $request){
    if($request->hasFile('file')){
        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(),['folder'=>'testing'])->getSecurePath();
        dd($uploadedFileUrl);
    } else {
        return back();
    }
});

// VISTAS DE ADMINISTRADOR
Route::get('/admin/aprobar-cuenta/{id}',[SolicitudController::class,'aprobarCuenta'])->middleware('auth')->name('solicitud.aprobarCuenta');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('/', [AdminController::class, 'goDashboard'])->name('admin.dashboard');
    Route::resource('categoria', CategoriaController::class);
    Route::resource('credito', CreditoController::class)->names('credito');
    Route::resource('paquete', PaqueteController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('orden',OrdenController::class);
    Route::resource('solicitud',SolicitudController::class);
    Route::get('/reportes',[AdminController::class,'reportes'])->name('admin.reportes');
    Route::get('/reportar/{id}',[AdminController::class,'banearCuenta'])->name('reportar');
    Route::get('/usuario-reportado/{id}',[AdminController::class,'verUsuarioReportado'])->name('admin.usuarioReportado');
    Route::get('/pdf-orden/{id}',[AdminController::class,'pdfOrden'])->name('admin.pdfOrden');
});
