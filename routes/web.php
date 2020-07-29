<?php
use App\Country;
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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('articles','ArticlesController');

Route::get('dashboard/profile', 'DashboardController@profile');
Route::resource('dashboard','DashboardController');
Auth::routes();

Route::get('articles/country/{countryId}', function($countryId){
    $country = Country::findOrFail($countryId);
    return View::make('articles/countryArticles')->with('country',$country);
});
