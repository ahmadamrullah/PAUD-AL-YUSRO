<?php


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@post_login')->name('login.post_login');
Route::get('/logout', 'AuthController@logout')->name('login.logout');

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
        Route::resource('siswa', 'Admin\SiswaController');
        Route::resource('guru', 'Admin\GuruController');
        // controller post
        Route::resource('post', 'Admin\PostController');
        Route::resource('gallery', 'Admin\GalleryController');
        Route::post('gallery', 'Admin\GalleryController@create')->name('gallery.create');
    });
});


Route::get('/', 'BerandaController@index')->name('beranda.index');
Route::get('/sejarah', 'SejarahController@index')->name('sejarah.index');
Route::get('/sambutan_detail', 'SejarahController@sambutan')->name('sambutan.detail');
Route::get('/visi_misi', 'SejarahController@visi')->name('sambutan.visi');
Route::get('/struktur_organisasi', 'SejarahController@struktur_organisasi')->name('sambutan.struktur');
Route::get('/data_siswa', 'SejarahController@data_siswa')->name('sambutan.data_siswa');
Route::get('/data_guru', 'SejarahController@data_guru')->name('sambutan.data_guru');

Route::get('/artikel', 'ArtikelController@artikel')->name('artikel.index');
Route::get('/artikel/single_artikel/{slug}', 'ArtikelController@detail_artikel')->name('artikel.detail');