<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GamelistController;
use App\Http\Controllers\Backend\SlotpgsoftController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

// Example Routes
Route::get('/', [FrontController::class, 'home'])->name('homepage');
Route::get('demo-slot-pg-soft', [FrontController::class, 'pgsoft'])->name('pgsoft');
Route::get('demo-slot-pg-soft/{slotpgsoft:slug}', [FrontController::class, 'pgsoft_show'])->name('pgsoftshow');
Route::get('demo-slot-pragmatic', function() {
    return redirect(route('homepage'));
});  
Route::get('demo-slot-pragmatic/{gamelist:slug}', [FrontController::class, 'gamelist_show'])->name('gamelistshow');

Route::middleware(['guest'])->group(function () {
    // Scafolding Manual
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
 });

Route::middleware(['auth', 'admin'])->prefix('pages')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('homedesc', [DashboardController::class, 'homedesc'])->name('homedesc');
    Route::get('homedesc/create', [DashboardController::class, 'homedesc_create'])->name('homedesc_create');
    // Route::post('homedesc', [DashboardController::class, 'homedesc_store'])->name('homedesc_store');
    Route::post('homedesc', [DashboardController::class, 'homedesc_update'])->name('homedesc_update');
    Route::resource('gamelist', GamelistController::class);
    Route::resource('pgsoft', SlotpgsoftController::class);

    Route::get('routes', function () {
        $routeCollection = Route::getRoutes();
    
        echo "<table style='width:100%'>";
        echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='10%'><h4>Name</h4></td>";
        echo "<td width='70%'><h4>Corresponding Action</h4></td>";
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" . $value->uri() . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    });
});