<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\bloquesController;

Route::get('/', [loginController::class, 'inicio'])->name('inicio');
Route::post('/iniciarSesion', [loginController::class, 'iniciarSesion'])->name('iniciarSesion');
Route::get('/cerrarSesion', [loginController::class, 'cerrarSesion'])->name('cerrarSesion');

Route::prefix('perfil')->group(function () {
    Route::get('/', [userController::class, 'perfil'])->name('perfil.inicio');
    Route::post('/cambiar-avatar', [userController::class, 'cambiarAvatar'])->name('cambiar.avatar');
    Route::post('/cambiar-informacion', [userController::class, 'cambiarInformacion'])->name('cambiar.informacion');

});

Route::prefix('admin')->group(function () {
    Route::get('/', [adminController::class, 'inicio'])->name('admin.inicio');
    Route::post('/cambiar/gimnasio', [adminController::class, 'cambiarGimnasio'])->name('cambiar.gimnasio');
});

Route::prefix('bloques')->group(function () {
    Route::get('/entrada', [bloquesController::class, 'entrada'])->name('bloques.Entrada');
    Route::get('/tienda', [bloquesController::class, 'tienda'])->name('bloques.Tienda');
    Route::get('/inventario', [bloquesController::class, 'inventario'])->name('bloques.Inventario');
    Route::get('/socios', [bloquesController::class, 'socios'])->name('bloques.Socios');
    Route::get('/historial', [bloquesController::class, 'historial'])->name('bloques.Historial');
    Route::get('/reportes', [bloquesController::class, 'reportes'])->name('bloques.Reportes');
    Route::get('/membresias', [bloquesController::class, 'membresias'])->name('bloques.Membresias');
});