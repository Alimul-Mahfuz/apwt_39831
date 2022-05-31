<?php
namespace App\Http\Controllers;
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

Route::get('/',[page_Controller::class,'home'])->name('home');
Route::get('/contact',[page_Controller::class,'Aboutus'])->name('aboutus');
Route::get('/aboutus',[page_Controller::class,'Contactus'])->name('contactus');
Route::get('/teamlist',[team_list_controller::class,'PrintTeamList'])->name('teamlist');
