<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YorumcuController;
use App\Http\Controllers\BaslikController;
//Anasayfa
Route::get('/',[YorumcuController::class,'index']);
//Bugün
Route::get('/bugun',[BaslikController::class,'index']);
//yeni kayıt formu
Route::get('/yeniaday',[YorumcuController::class,'form']);
//kayit
Route::post('/kayit',[YorumcuController::class,'create'])->middleware('KayitKontrol');
//Uye giriş formu
Route::get('/uyegiris',[YorumcuController::class,'showUyeForm']);
//Uye girişi
Route::post('/giris',[YorumcuController::class,'login']);
//Şifre sıfırlama formu
Route::get('/sifresifirla',[YorumcuController::class,'updateSifre']);
//Şifre sıfırlama işlemi
Route::get('/yenisifre',[YorumcuController::class,'update']);


//Başlık Sayfası
Route::get('/baslik/{bname?}',[BaslikController::class,'show']);

//İspikçi Sayfası
Route::get('/ispikci/{unick?}',[YorumcuController::class,'show']);