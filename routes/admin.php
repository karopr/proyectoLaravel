<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\ContratoController;
use App\Http\Controllers\Admin\CdController;
use App\Http\Controllers\Admin\FichaController;
use App\Http\Controllers\Admin\PagoController;
use App\Http\Controllers\Admin\HrutaController;
use App\Http\Controllers\Admin\PbieneController;
use App\Http\Controllers\Admin\PsadplanoController;
use App\Http\Controllers\Admin\WgsplanoController;
use App\Http\Controllers\Admin\VplanoController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\PresupuestoController;
use App\Http\Controllers\Admin\FotoController;

Route::get('', [HomeController::class, 'index']);
Route::resource('clientes', ClienteController::class)->names('admin.clientes');
Route::resource('documentos', DocumentoController::class)->names('admin.documentos');
Route::resource('contratos', ContratoController::class)->names('admin.contratos');
Route::resource('cds', CdController::class)->names('admin.cds');
Route::resource('fichas', FichaController::class)->names('admin.fichas');
Route::resource('pagos', PagoController::class)->names('admin.pagos');
Route::resource('hrutas', HrutaController::class)->names('admin.hrutas');
Route::resource('pbienes', PbieneController::class)->names('admin.pbienes');
Route::resource('psadplanos', PsadplanoController::class)->names('admin.psadplanos');
Route::resource('wgsplanos', WgsplanoController::class)->names('admin.wgsplanos');
Route::resource('vplanos', VplanoController::class)->names('admin.vplanos');
Route::resource('proyectos', ProyectoController::class)->names('admin.proyectos');
Route::resource('presupuestos', PresupuestoController::class)->names('admin.presupuestos');
Route::resource('fotos', FotoController::class)->names('admin.fotos');