<?php

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/privacypolicy', function () {
    return view('layouts.privacypolicy');
})->name('privacypolicy');

Route::get('/supports', function () {
    return view('layouts.supports');
})->name('supports');

Route::get('/background', function () {
    return view('layouts.background');
})->name('background');

Route::get('/missionvision', function () {
    return view('layouts.missionvision');
})->name('missionvision');

Route::get('/organization', function () {
    return view('layouts.organization');
})->name('organization');

Route::get('/staffdirectory', function () {
    return view('layouts.staffdirectory');
})->name('staffdirectory');

Route::get('/generalform', function () {
    return view('layouts.generalform');
})->name('generalform');

Route::get('/technicaladministration', function () {
    return view('layouts.technicaladministration');
})->name('technicaladministration');

Route::get('/engineeringinformation', function () {
    return view('layouts.engineeringinformation');
})->name('engineeringinformation');

Route::get('/dmc', function () {
    return view('layouts.dmc');
})->name('dmc');

Route::get('/userhomepage', function () {
    return view('layouts.userhomepage');
})->name('userhomepage');

Route::get('/myprofile', function () {
    return view('layouts.myprofile');
})->name('myprofile');

Route::get('/roles', function () {
    return view('layouts.roles');
})->name('roles');

Route::get('/hardwareinformation', function () {
    return view('layouts.hardwareinformation');
})->name('hardwareinformation');

Route::get('/softwareinformation', function () {
    return view('layouts.softwareinformation');
})->name('softwareinformation');

Route::get('/administrator', function () {
    return view('layouts.administrator');
})->name('administrator');

Route::get('/setting', function () {
    return view('layouts.setting');
})->name('setting');

Route::get('/access', function () {
    return view('layouts.access');
})->name('access');

Route::get('/usermgmt', function () {
    return view('layouts.usermgmt');
})->name('usermgmt');

Route::get('/passwordmanager', function () {
    return view('layouts.passwordmanager');
})->name('passwordmanager');

Route::get('/contentmanager', function () {
    return view('layouts.contentmanager');
})->name('contentmanager');

Route::get('/usersoftware', function () {
    return view('layouts.usersoftware');
})->name('usersoftware');

Route::get('/settingaddnewsystem', function () {
    return view('layouts.settingaddnewsystem');
})->name('settingaddnewsystem');

Route::get('/passwordmanagerview', function () {
    return view('layouts.passwordmanagerview');
})->name('passwordmanagerview');

Route::get('/passwordmanageraddnew', function () {
    return view('layouts.passwordmanageraddnew');
})->name('passwordmanageraddnew');

