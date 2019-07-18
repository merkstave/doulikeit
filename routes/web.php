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
	$videoFolder = storage_path('app/public/video');
	if (!file_exists($videoFolder)) {
		abort('Missing video folder');
	}

	$videos = scandir($videoFolder);
	array_shift($videos);
	array_shift($videos);
	$videosCount = count($videos);
	if (!$videosCount) {
	    abort('No videos found');
	}

	$video = $videos[mt_rand(0, $videosCount - 1)];

    return view('video', ['video' => $video]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
