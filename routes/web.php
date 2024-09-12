<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViewsController;
use App\Http\Controllers\ClientViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FunilController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\IBGEController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FazendaController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminViewsController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/register', [AdminViewsController::class, 'register'])->name('register')->middleware('auth');
Route::get('/paginas', [AdminViewsController::class, 'EmpresaPages'])->name('pages')->middleware('auth');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login/do', [AuthController::class, 'login'])->name('login.do');

Route::get('/perfil/{user}', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/perfil/edit/{user}', [UserController::class, 'editProfile'])->name('profile.edit')->middleware('auth');

Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas')->middleware('auth'); 
Route::get('/empresas/nova', [EmpresaController::class, 'add'])->name('empresas.add')->middleware('auth');
Route::get('/empresas/edit/{empresa}', [EmpresaController::class, 'edit'])->name('empresa.edit')->middleware('auth');
Route::post('/empresas/store', [EmpresaController::class, 'store'])->name('empresas.store');
Route::post('/empresas/do/edit/{empresa}', [EmpresaController::class, 'doEdit'])->name('empresas.do.edit')->middleware('auth');

Route::get('/fazendas', [FazendaController::class, 'index'])->name('fazendas')->middleware('auth');
Route::get('/fazendas/nova', [FazendaController::class, 'add'])->name('fazendas.nova')->middleware('auth');
Route::post('/fazendas/store', [FazendaController::class, 'store'])->name('fazendas.store')->middleware('auth');
Route::get('/fazendas/edit/{fazenda}', [FazendaController::class, 'edit'])->name('fazenda.edit')->middleware('auth');
Route::post('/fazendas/do/edit/{fazenda}', [FazendaController::class, 'doEdit'])->name('fazendas.do.edit')->middleware('auth');

Route::get('/home/edit/{home}', [PagesController::class, 'editHomePage'])->name('home.edit')->middleware('auth');
Route::post('/home/do/edit/{home}', [PagesController::class, 'doEditHomePage'])->name('home.do.edit')->middleware('auth');
Route::get('/contato/edit/{contato}', [PagesController::class, 'editContatoPage'])->name('contato.edit')->middleware('auth');
Route::post('/contato/do/edit/{contato}', [PagesController::class, 'doEditContatoPage'])->name('contato.do.edit')->middleware('auth');
Route::get('/sobrenos/edit/{sobrenos}', [PagesController::class, 'editSobreNos'])->name('sobrenos.edit')->middleware('auth');
Route::post('/sobrenos/do/edit/{sobrenos}', [PagesController::class, 'doEditSobreNos'])->name('sobrenos.do.edit')->middleware('auth');

Route::get('/funil', [FunilController::class, 'funil'])->name('funil')->middleware('auth');

Route::get('/cidades/getByUf/{uf}', [IBGEController::class, 'getByUf'])->name('ibge.getByUf');

// ---------------------------------------------------------------------------------------------------------------------------------------

Route::get('/{emp}', [ClientViewController::class, 'home'])->name('home');
Route::get('/{emp}/sobrenos', [ClientViewController::class, 'sobrenos'])->name('sobrenos');
Route::get('/{emp}/contato', [ClientViewController::class, 'contato'])->name('contato');
Route::get('/{emp}/fazendas', [ClientViewController::class, 'fazendas'])->name('fazendas');