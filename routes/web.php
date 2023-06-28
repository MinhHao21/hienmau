<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KyanhController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\NghesynghenhanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\DisannghethuatController;
use App\Http\Controllers\VanbanController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\ThongtinhienmauController;
use App\Http\Controllers\TuyendungController;
use App\Http\Controllers\WeatherController;
use App\Models\Fileupload;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/check', [DanhmucController::class, 'check'])->name('khieunaitocaos.check');

Route::get('/check-post', [DanhmucController::class, 'checkpost'])->name('khieunaitocaos.checkpost');

Route::get('/weather', [WeatherController::class, 'index']);


// file upload
Route::get('/xoa-file', [FileuploadController::class, 'xoafile'])->name('khieunaitocaos.xoafile');
Route::get('/xoa-uuid', [FileuploadController::class, 'xoauuid'])->name('khieunaitocaos.xoauuid');
Route::get('/load-file', [FileuploadController::class, 'loadfile'])->name('khieunaitocaos.loadfile');
Route::post('/uploads', [FileuploadController::class, 'fileupload'])->name('khieunaitocaos.fileupload');
Route::get('/config', [FileuploadController::class, 'config'])->name('khieunaitocaos.config');



// Route::get('/', [PostController::class, 'trangchulocha'])->name('posts.home');
Route::get('/danhmuccon/{id}', [DanhmucController::class, 'danhmuccon'])->name('post.danhmuccon');

Route::get('/chi-tiet/{slug}', [DanhmucController::class, 'chitiet'])->name('post.chitiet');
Route::get('/danh-muc-so-tp', [DanhmucController::class, 'danhmuchacon'])->name('posts.danhmuchacon');

Route::get('/hoi-dap', [DanhmucController::class, 'hoidap'])->name('posts.hoidap');
Route::post('/luu-cau-hoi', [DanhmucController::class,'luuhd'])->name('posts.luuhd');
Route::get('/lich-cong-tac', [DanhmucController::class, 'lichcongtac'])->name('posts.lichcongtac');

Route::get('/ajax-van-ban', [DanhmucController::class, 'ajaxvanban'])->name('posts.ajaxvanban');
Route::get('/van-ban-tinh', [DanhmucController::class, 'vanbantinh'])->name('posts.vanbantinh');
Route::get('/van-ban-huyen', [DanhmucController::class, 'vanbanhuyen'])->name('posts.vanbanhuyen');
Route::get('/van-ban-chi-tiet/{id}', [DanhmucController::class, 'vanbanchitiet'])->name('posts.vanbanchitiet');
Route::get('/so-do-website', [DanhmucController::class, 'sodowebsite'])->name('posts.sodowebsite');
Route::get('/di-san-dan-ca/{slug}', [DanhmucController::class, 'chitietdisan'])->name('chitietdisan');



Route::get('/thu-vien-anh/{slug}', [DanhmucController::class, 'thuvienanh'])->name('thuvienanh.index');


// Route::get('/tin-tuc/{slug}', [TuyendungController::class, 'tintuc'])->name('posts.tintuc');
// Route::get('/chi-tiet-tuyen-dung/{slug}', [TuyendungController::class, 'tuyendung'])->name('chitiettuyendung');
// Route::get('/ung-tuyen', [TuyendungController::class, 'ungtuyen'])->name('ungtuyen');
// Route::get('/ung-tuyen', [TuyendungController::class, 'ungtuyenview'])->name('ungtuyen');
// Route::post('/ung-tuyen', [TuyendungController::class, 'phanhoi'])->name('ungtuyen');
// Route::get('/danh-muc', [TuyendungController::class, 'danhmuc'])->name('posts.danhmuchacon');
Route::get('/', [ThongtinhienmauController::class, 'trangchu'])->name('trangchu');
Route::get('/dang-ky-hien-mau', [ThongtinhienmauController::class, 'dangkyhienmau'])->name('posts.dangkyhienmau');
Route::get('/dang-ky-hien-mau', [ThongtinhienmauController::class, 'dangkyhienmauview'])->name('posts.dangkyhienmau');
Route::post('/dang-ky-hien-mau', [ThongtinhienmauController::class, 'phanhoi'])->name('posts.dangkyhienmau');










