<?php

use App\Http\Controllers\BahanajarController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\BiodatadsnController;
use App\Http\Controllers\DataseringController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrasiilmiahController;
use App\Http\Controllers\PembimbingdsnController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PengajaranController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PengujianmhsController;
use App\Http\Controllers\PenunjangController;
use App\Http\Controllers\ProfiladmnController;
use App\Http\Controllers\TugastmbhnController;
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



Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::post("/postlogin",[LoginController::class, 'postlogin'])->name('postlogin');
Route::get("/logout",[LoginController::class, 'logout'])->name('logout');
Route::get("/registrasi",[LoginController::class, 'registrasi'])->name('registrasi');
Route::post("/simpanregistrasi",[LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');


Route::group(['middleware' => ['auth']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::group(['middleware' => ['auth','ceklevel:admin']],function(){ 
    Route::get("/profiladmn", [ProfiladmnController::class, 'index1']);
    Route::get("/profiladmn/{id}/edit", [ProfiladmnController::class, 'edit']);
    Route::put("/profiladmn/{id}", [ProfiladmnController::class, 'update']);

    Route::get("/pngguna", [PenggunaController::class, 'index']);
    Route::get("/pngguna/create", [PenggunaController::class, 'create']);
    Route::post("/pngguna/store", [PenggunaController::class, 'store']);
    Route::get("/pngguna/{id}/edit", [PenggunaController::class, 'edit']);
    Route::put("/pngguna/{id}", [PenggunaController::class, 'update']);
    Route::delete("/pngguna/{id}", [PenggunaController::class, 'destroy']);
});

Route::group(['middleware' => ['auth','ceklevel:user']],function(){
    Route::get("/biodatadsn",[BiodatadsnController::class, 'index']); 
    Route::get("/biodatadsn/{id}/edit",[BiodatadsnController::class, 'edit']);
    Route::put("/biodatadsn/{id}",[BiodatadsnController::class, 'update']);

    Route::get("/laporan",[LaporanController::class,'index']);

    Route::get("/penelitian", [PenelitianController::class, 'index']);
    Route::get("/penelitian/create", [PenelitianController::class, 'create']);
    Route::post("/penelitian/store", [PenelitianController::class, 'store']);
    Route::get("/penelitian/{id}/edit", [PenelitianController::class, 'edit']);
    Route::put("/penelitian/{id}", [PenelitianController::class, 'update']);
    Route::delete("/penelitian/{id}", [PenelitianController::class, 'destroy']);

    Route::get("/pengabdian", [PengabdianController::class, 'index']);
    Route::get("/pengabdian/create", [PengabdianController::class, 'create']);
    Route::post("/pengabdian/store", [PengabdianController::class, 'store']);
    Route::get("/pengabdian/{id}/edit", [PengabdianController::class, 'edit']);
    Route::put("/pengabdian/{id}", [PengabdianController::class, 'update']);
    Route::delete("/pengabdian/{id}", [PengabdianController::class, 'destroy']);

    Route::get("/penunjang", [PenunjangController::class, 'index']);
    Route::get("/penunjang/create", [PenunjangController::class, 'create']);
    Route::post("/penunjang/store", [PenunjangController::class, 'store']);
    Route::get("/penunjang/{id}/edit", [PenunjangController::class, 'edit']);
    Route::put("/penunjang/{id}", [PenunjangController::class, 'update']);
    Route::delete("/penunjang/{id}", [PenunjangController::class, 'destroy']);

    Route::get("/pengajaran", [PengajaranController::class, 'index']);
    Route::get("/pengajaran/create", [PengajaranController::class, 'create']);
    Route::post("/pengajaran/store", [PengajaranController::class, 'store']);
    Route::get("/pengajaran/{id}/edit", [PengajaranController::class, 'edit']);
    Route::put("/pengajaran/{id}", [PengajaranController::class, 'update']);
    Route::delete("/pengajaran/{id}", [PengajaranController::class, 'destroy']);

    Route::get("/bimbmhs", [BimbinganController::class, 'index']);
    Route::get("/bimbmhs/create", [BimbinganController::class, 'create']);
    Route::post("/bimbmhs/store", [BimbinganController::class, 'store']);
    Route::get("/bimbmhs/{id}/edit", [BimbinganController::class, 'edit']);
    Route::put("/bimbmhs/{id}", [BimbinganController::class, 'update']);
    Route::delete("/bimbmhs/{id}", [BimbinganController::class, 'destroy']);;

    Route::get("/pengmhs", [PengujianmhsController::class, 'index']);
    Route::get("/pengmhs/create", [PengujianmhsController::class, 'create']);
    Route::post("/pengmhs/store", [PengujianmhsController::class, 'store']);
    Route::get("/pengmhs/{id}/edit", [PengujianmhsController::class, 'edit']);
    Route::put("/pengmhs/{id}", [PengujianmhsController::class, 'update']);
    Route::delete("/pengmhs/{id}", [PengujianmhsController::class, 'destroy']);;

    Route::get("/datasring", [DataseringController::class, 'index']);
    Route::get("/datasring/create", [DataseringController::class, 'create']);
    Route::post("/datasring/store", [DataseringController::class, 'store']);
    Route::get("/datasring/{id}/edit", [DataseringController::class, 'edit']);
    Route::put("/datasring/{id}", [DataseringController::class, 'update']);
    Route::delete("/datasring/{id}", [DataseringController::class, 'destroy']);;

    Route::get("/bahanajar", [BahanajarController::class, 'index']);
    Route::get("/bahanajar/create", [BahanajarController::class, 'create']);
    Route::post("/bahanajar/store", [BahanajarController::class, 'store']);
    Route::get("/bahanajar/{id}/edit", [BahanajarController::class, 'edit']);
    Route::put("/bahanajar/{id}", [BahanajarController::class, 'update']);
    Route::delete("/bahanajar/{id}", [BahanajarController::class, 'destroy']);;

    Route::get("/orasilmiah", [OrasiilmiahController::class, 'index']);
    Route::get("/orasilmiah/create", [OrasiilmiahController::class, 'create']);
    Route::post("/orasilmiah/store", [OrasiilmiahController::class, 'store']);
    Route::get("/orasilmiah/{id}/edit", [OrasiilmiahController::class, 'edit']);
    Route::put("/orasilmiah/{id}", [OrasiilmiahController::class, 'update']);
    Route::delete("/orasilmiah/{id}", [OrasiilmiahController::class, 'destroy']);

    Route::get("/tgstmbhn", [TugastmbhnController::class, 'index']);
    Route::get("/tgstmbhn/create", [TugastmbhnController::class, 'create']);
    Route::post("/tgstmbhn/store", [TugastmbhnController::class, 'store']);
    Route::get("/tgstmbhn/{id}/edit", [TugastmbhnController::class, 'edit']);
    Route::put("/tgstmbhn/{id}", [TugastmbhnController::class, 'update']);
    Route::delete("/tgstmbhn/{id}", [TugastmbhnController::class, 'destroy']);;

    Route::get("/pembdsn", [PembimbingdsnController::class, 'index']);
    Route::get("/pembdsn/create", [PembimbingdsnController::class, 'create']);
    Route::post("/pembdsn/store", [PembimbingdsnController::class, 'store']);
    Route::get("/pembdsn/{id}/edit", [PembimbingdsnController::class, 'edit']);
    Route::put("/pembdsn/{id}", [PembimbingdsnController::class, 'update']);
    Route::delete("/pembdsn/{id}", [PembimbingdsnController::class, 'destroy']);;
});

