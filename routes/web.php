<?php

// Facades 를 사용하게 하는 구문
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
// use App\Http\Controllers\NewController;
use App\Http\Controllers\Acontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 7번쨰
// echo "7. /routes/web.php → 블레이드 페이지 파일을 불러오기 바로전 <br />";

Route::get("/", function () {
  // return view("welcome");
  // ! use Illuminate\Support\Facades\View로 view::make를 쓸 수 있게 됩니다.
  return view::make("welcome");
});

// Route::get("get", function () {
//   return view("routing");
// });

// Route::get("get", [NewController::class, "index"]);

// Route::get("get/{id}", function ($id) {
//   return view("routing", ["id" => $id, "data" => ""]);
// });

Route::get("/one", function () {
  for ($i = 0; $i < 3; $i++) {
    echo app(Acontroller::class)->multiple(2);
    // echo app("Aclass")->multiple(2);
    echo "<br />";
  }
  return "--------------------";
});

Route::get("/test", function () {
  return "미들웨어 테스트 페이지 입니다.";
})->middleware("test");