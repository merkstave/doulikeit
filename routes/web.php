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

function prepareList(string $path): array {
	$list = scandir($path);
	array_shift($list);
	array_shift($list);
	return $list;
}

Route::get('/', function () {
	$videoRoot = storage_path('app/public/video');
	if (!file_exists($videoRoot)) {
		abort(500, 'Missing video folder');
	}

	$videoType = mt_rand(0, 1) ? 'finds' : 'og';
	$videosPath = $videoRoot . DIRECTORY_SEPARATOR . $videoType;
	if (!file_exists($videosPath)) {
		abort(500, 'Missing "' . $name . '" video folder');
	}

	$list = prepareList($videosPath);
	$videosCount = count($list);
	if (!$videosCount) {
	    abort(500, 'Missing videos in "' . $videoType . '" folder');
	}

	$video = $list[mt_rand(0, $videosCount - 1)];

    return view('video', ['video' => $videoType . '/' . rawurlencode($video)]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
