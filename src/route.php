<?php
/**
 * @author Prasetyo Pandu <prasetyowira@gmail.com>
 * Date: 19/12/17
 * Time: 11.46
 */
Route::group(['middleware' => 'web','prefix' => 'orangtua'], function () {
	Route::get('/', 'Ariwira\Orangtua\Http\Controllers\AdmissionController@index')->name('orangtua.index');
	Route::post('/store', 'Ariwira\Orangtua\Http\Controllers\AdmissionController@store')->name('orangtua.store');
	Route::get('/thankyou', 'Ariwira\Orangtua\Http\Controllers\AdmissionController@thankyou')->name('orangtua.thankyou');

	Route::get('/login', 'Ariwira\Orangtua\Http\Controllers\LoginController@showLoginForm')->name('orangtua.login');
	Route::post('/login', 'Ariwira\Orangtua\Http\Controllers\LoginController@login');
	Route::post('/logout', 'Ariwira\Orangtua\Http\Controllers\LoginController@logout')->name('orangtua.logout');

//Route::group(['middleware' => 'auth', 'prefix' => 'orangtua/admin'], function () {
	Route::group(['prefix' => 'admin'], function () {
		Route::get('dashboard', 'Ariwira\Orangtua\Http\Controllers\AdminDashboardController@index')->name('orangtua.admin.dashboard');
		Route::get('admission', 'Ariwira\Orangtua\Http\Controllers\AdminCampaignController@index')->name('orangtua.admin.dashboard');
	});
});