<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 12/16/2018
 * Time: 10:11 PM
 */


/*Route::get('/', function () {
    return view('pc::welcome');
});*/

Route::get('timezones/{timezone}',
    'Pc\Custom\CustomController@index');

Route::view('/', 'pc::panel.blank');
// Section CoreUI elements
Route::view('/sample/dashboard','pc::samples.dashboard');
Route::view('/sample/buttons','pc::samples.buttons');
Route::view('/sample/social','pc::samples.social');
Route::view('/sample/cards','pc::samples.cards');
Route::view('/sample/forms','pc::samples.forms');
Route::view('/sample/modals','pc::samples.modals');
Route::view('/sample/switches','pc::samples.switches');
Route::view('/sample/tables','pc::samples.tables');
Route::view('/sample/tabs','pc::samples.tabs');
Route::view('/sample/icons-font-awesome', 'pc::samples.font-awesome-icons');
Route::view('/sample/icons-simple-line', 'pc::samples.simple-line-icons');
Route::view('/sample/widgets','pc::samples.widgets');
Route::view('/sample/charts','pc::samples.charts');
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');
