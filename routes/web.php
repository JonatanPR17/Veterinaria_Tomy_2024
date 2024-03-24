<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

Route::controller(PersonaController::class)->group(function () {
    Route::get('persona', 'index');
    Route::get('persona/crear', 'create');
    Route::get('persona/actualizar', 'update');
    Route::get('persona/eliminar/{persona}','remove');
});

Route::controller(TelefonoController::class)->group(function () {
    Route::get('telefono', 'index');
    Route::get('telefono/crear', 'create');
    Route::get('telefono/actualizar', 'update');
    Route::get('telefono/eliminar/{telefono}','remove');
});

Route::controller(TipoDocumentoController::class)->group(function () {
    Route::get('tipodocumento', 'index');
    Route::get('tipodocumento/crear', 'create');
    Route::get('tipodocumento/actualizar', 'update');
    Route::get('tipodocumento/eliminar/{tipodocumento}','remove');
});

Route::controller(DireccionController::class)->group(function () {
    Route::get('direccion', 'index');
    Route::get('direccion/crear', 'create');
    Route::get('direccion/actualizar', 'update');
    Route::get('direccion/eliminar/{direccion}','remove');
});
Route::controller(ClienteController::class)->group(function () {
    Route::get('cliente', 'index');
    Route::get('cliente/crear', 'create');
    Route::get('cliente/actualizar', 'update');
    Route::get('cliente/eliminar/{cliente}','remove');
});

Route::controller(MascotaController::class)->group(function () {
    Route::get('mascota', 'index');
    Route::get('mascota/crear', 'create');
    Route::get('mascota/actualizar', 'update');
    Route::get('mascota/eliminar/{mascota}','remove');
});

Route::controller(EmpleadoController::class)->group(function () {
    Route::get('empleado', 'index');
    Route::get('empleado/crear', 'create');
    Route::get('empleado/actualizar', 'update');
    Route::get('empleado/eliminar/{empleado}','remove');
});

Route::controller(CargoController::class)->group(function () {
    Route::get('cargo', 'index');
    Route::get('cargo/crear', 'create');
    Route::get('cargo/actualizar', 'update');
    Route::get('cargo/eliminar/{cargo}','remove');
});

Route::controller(AsistenciaController::class)->group(function () {
    Route::get('asistencia', 'index');
    Route::get('asistencia/crear', 'create');
    Route::get('asistencia/actualizar', 'update');
    Route::get('asistencia/actualizar/{asistencia}', 'updateprivate');
    Route::get('asistencia/eliminar/{asistencia}','remove');
});

Route::controller(SucursalController::class)->group(function () {
    Route::get('sucursal', 'index');
    Route::get('sucursal/crear', 'create');
    Route::get('sucursal/actualizar', 'update');
    Route::get('sucursal/eliminar/{sucursal}','remove');
});

Route::controller(VentaController::class)->group(function () {
    Route::get('venta', 'index');
    Route::get('venta/crear', 'create');
    Route::get('venta/actualizar', 'update');
    Route::get('venta/eliminar/{venta}','remove');
});

Route::controller(TipoPagoController::class)->group(function () {
    Route::get('tipopago', 'index');
    Route::get('tipopago/crear', 'create');
    Route::get('tipopago/actualizar', 'update');
    Route::get('tipopago/eliminar/{tipopago}','remove');
});

Route::controller(ComprobanteController::class)->group(function () {
    Route::get('comprobante', 'index');
    Route::get('comprobante/crear', 'create');
    Route::get('comprobante/actualizar', 'update');
    Route::get('comprobante/eliminar/{comprobante}','remove');
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('producto', 'index');
    Route::get('producto/crear', 'create');
    Route::get('producto/actualizar', 'update');
    Route::get('producto/eliminar/{producto}','remove');   
});

Route::controller(TipoProductoController::class)->group(function () {
    Route::get('tipoproducto', 'index');
    Route::get('tipoproducto/crear', 'create');
    Route::get('tipoproducto/actualizar', 'update');
    Route::get('tipoproducto/eliminar/{tipoproducto}','remove');   
});
Route::controller(ProveedorController::class)->group(function () {
    Route::get('proveedor', 'index');
    Route::get('proveedor/crear', 'create');
    Route::get('proveedor/actualizar', 'update');
    Route::get('proveedor/eliminar/{proveedor}','remove');   
});