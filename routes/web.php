<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YorumcuController;
use App\Http\Controllers\BaslikController;

//Anasayfa
Route::get('/',[YorumcuController::class,'index']);

//Bugün
Route::get('/bugun',[BaslikController::class,'index']);

//Arar Bulurum İzini
Route::post('/arabul/{bname?}',[BaslikController::class,'store']);

//yeni kayıt formu
Route::get('/yeniaday',[YorumcuController::class,'form']);

//kayit
Route::post('/kayit',[YorumcuController::class,'create'])->middleware('KayitKontrol');

//Uye giriş formu
Route::get('/uyegiris',[YorumcuController::class,'showUyeForm']);

Route::group(['middleware'=>['auth']],function(){

//Uye girişi
Route::post('/giris',[YorumcuController::class,'login']);
//yeni başlık oluşturma formu
Route::get('/yenibaslik',[BaslikController::class,'baslikformu']);

});

//Şifre sıfırlama formu
Route::get('/sifresifirla',[YorumcuController::class,'updateSifre']);

//Şifre sıfırlama işlemi
Route::get('/yenisifre',[YorumcuController::class,'update']);

//Başlık Sayfası
Route::get('/baslik/{bname?}',[BaslikController::class,'show']);

//İspikçi Sayfası
Route::get('/ispikci/{unick?}',[YorumcuController::class,'show']);
