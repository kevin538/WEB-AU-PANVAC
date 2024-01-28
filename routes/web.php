<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



/* Route::get('/', function () {
$data = ['titre' => 'Home-Panvac'];
return view('welcome', $data);
}); */

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/send-email', [App\Http\Controllers\SendEmailFrontController::class, 'sendEmail'])->name('send.email');

Route::group(['middleware' => 'log.route.visit'], function () {

    /* Routes without drop down */
    Route::get('/contact', '\App\Http\Controllers\FrontController@contact')->name('contact');
    Route::get('/service', '\App\Http\Controllers\FrontController@service')->name('service');
    Route::get('/aboutus', '\App\Http\Controllers\FrontController@aboutus')->name('aboutus');
    Route::get('/events', '\App\Http\Controllers\FrontController@news')->name('news');
    /* Routes without drop down */

    /* Routes vacine test */
    Route::get('/passedvaccines', '\App\Http\Controllers\FrontController@passedvaccines')->name('passedvaccines');
    Route::get('/testprogressvaccine', '\App\Http\Controllers\FrontController@testprogressvaccine')->name('testprogressvaccine');

    Route::get('/searchCertificat/{reference}', '\App\Http\Controllers\FrontController@search')->name('searchCertificat');
    Route::get('/testprogres/{reference}', '\App\Http\Controllers\FrontController@testprogres')->name('testprogres');



    /* Routes frontend section About*/
    Route::get('/policy', '\App\Http\Controllers\AboutController@policy')->name('policy');
    Route::get('/ourmission', '\App\Http\Controllers\AboutController@ourmission')->name('ourmission');
    Route::get('/mandates', '\App\Http\Controllers\AboutController@mandates')->name('mandates');
    Route::get('/ourgovernance', '\App\Http\Controllers\AboutController@ourgovernance')->name('ourgovernance');
    Route::get('/internationalrecognitions', '\App\Http\Controllers\AboutController@internationalrecognitions')->name('internationalrecognitions');


    /* Routes frontend section Quality*/
    Route::get('/qualitymanegmentsystem', '\App\Http\Controllers\QualityController@qualitymanegmentsystem')->name('qualitymanegmentsystem');
    Route::get('/bioriskmanegmentsystem', '\App\Http\Controllers\QualityController@bioriskmanegmentsystem')->name('bioriskmanegmentsystem');


    /* Routes frontend section News*/
    Route::get('/facilitiesressources', '\App\Http\Controllers\NewsFrontController@facilitiesressources')->name('facilitiesressources');
    Route::get('/trainingandeducation', '\App\Http\Controllers\NewsFrontController@trainingandeducation')->name('trainingandeducation');
    Route::get('/pressrelease', '\App\Http\Controllers\NewsFrontController@pressrelease')->name('pressrelease');

    /* Routes frontend section Service*/
    Route::get('/qualitycontrolvaccine', '\App\Http\Controllers\ServiceFrontController@qualitycontrolvaccine')->name('qualitycontrolvaccine');
    Route::get('/productionsupply', '\App\Http\Controllers\ServiceFrontController@productionsupply')->name('productionsupply');
    Route::get('/capacitybuildinng', '\App\Http\Controllers\ServiceFrontController@capacitybuildinng')->name('capacitybuildinng');
    Route::get('/inprovementvaccineproduction', '\App\Http\Controllers\ServiceFrontController@inprovementvaccineproduction')->name('inprovementvaccineproduction');
    Route::get('/repositories', '\App\Http\Controllers\ServiceFrontController@repositories')->name('repositories');
    Route::get('/supportsurveillance', '\App\Http\Controllers\ServiceFrontController@supportsurveillance')->name('supportsurveillance');
    Route::get('/onehealthsupport', '\App\Http\Controllers\ServiceFrontController@onehealthsupport')->name('onehealthsupport');

     


});







Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

/* Route backend */

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    /* Route Contacts */
    Route::get('/contact', 'App\Http\Controllers\ParametreController@index')->name('indexcontact');
    Route::get('/contact/edit', 'App\Http\Controllers\ParametreController@edit')->name('editcontact');
    Route::post('/savecontact', 'App\Http\Controllers\ParametreController@save')->name('savecontact');
    Route::get('/contact/edit/{id}', 'App\Http\Controllers\ParametreController@editif')->name('indexcoedit');
    Route::put('/contact/update/{id}', 'App\Http\Controllers\ParametreController@update')->name('updatecontact');
    Route::delete('/contact/{id}', 'App\Http\Controllers\ParametreController@destroy')->name('contact.destroy');


    /* Route album */
    Route::get('/Album', 'App\Http\Controllers\AlbumController@index')->name('indexcalbum');
    Route::get('/Album/Create', 'App\Http\Controllers\AlbumController@create')->name('createalbum');
    Route::post('/savealbum', 'App\Http\Controllers\AlbumController@save')->name('savealbum');
    Route::delete('/albums/{id}', [App\Http\Controllers\AlbumController::class, 'destroy'])->name('albums.destroy');

    /* Route Service */
    Route::get('/service', 'App\Http\Controllers\ServiceController@index')->name('indexcservice');
    Route::get('/service/edit', 'App\Http\Controllers\ServiceController@edit')->name('editservice');
    Route::get('/service/create', 'App\Http\Controllers\ServiceController@create')->name('createservice');
    Route::post('/saveservice', 'App\Http\Controllers\ServiceController@save')->name('saveservice');
    Route::delete('/service/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');


    /* Route news */
    Route::get('/news', 'App\Http\Controllers\ProjetController@index')->name('indexnews');
    Route::get('/news/create', 'App\Http\Controllers\ProjetController@create')->name('createnews');
    Route::post('/savenews', 'App\Http\Controllers\ProjetController@save')->name('savenews');
    Route::delete('/news/{id}', [App\Http\Controllers\ProjetController::class, 'destroy'])->name('news.destroy');


    /* Route  Teams*/
    Route::get('/team', 'App\Http\Controllers\TeamController@index')->name('indexteam');
    Route::get('/team/create', 'App\Http\Controllers\TeamController@create')->name('createteam');
    Route::get('/team/edit', 'App\Http\Controllers\TeamController@edit')->name('editteam');
    Route::post('/saveteam', 'App\Http\Controllers\TeamController@save')->name('saveteam');
    Route::delete('/team/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('team.destroy');

    /* Route  Cert Certificates*/
    Route::get('/certificate', 'App\Http\Controllers\CertificateController@index')->name('indexcertificate');
    Route::get('/certificate/create', 'App\Http\Controllers\CertificateController@create')->name('createcertificate');
    Route::post('/savecertificate', 'App\Http\Controllers\CertificateController@save')->name('savecertificate');
    Route::delete('/certificate/{id}', [App\Http\Controllers\CertificateController::class, 'destroy'])->name('certificate.destroy');


    /* Route Progress Certificates*/
    Route::get('/testinprogress', 'App\Http\Controllers\ProgresscertificatController@index')->name('indextestinprogress');
    Route::get('/testinprogress/create', 'App\Http\Controllers\ProgresscertificatController@create')->name('createtestinprogress');
    Route::post('/savetestinprogress', 'App\Http\Controllers\ProgresscertificatController@save')->name('savetestinprogress');
    Route::delete('/testinprogress/{id}', [App\Http\Controllers\ProgresscertificatController::class, 'destroy'])->name('testinprogress.destroy');


     /* Routes documentation*/
     Route::get('/WebpanvacDocumentation', 'App\Http\Controllers\DocumentationController@index')->name('WebpanvacDocumentation');
});