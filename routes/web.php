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
  //  return view('welcome');
  $to_name='Basanta Sapkota';
  $to_email='sapkota.basanta46@gmail.com';
  $data=array('name'=>'Babin','body'=>'Hell0!!');
  Mail::send('lara',$data,function($message) use($to_name,$to_email)
  {
      $message->to($to_email)
      ->subject('laramail'); 
  });
});

Route::get('Pdf','PDFgenerator@PDFgenerator');