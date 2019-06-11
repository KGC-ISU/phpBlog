<?php

use Gondr\Route;

Route::get("/", "StaticController@index");
Route::get("/view", "PostController@viewPage");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
}else {
    Route::get("/logout", "UserController@logout");
    Route::get("/post", "PostController@writePage");
    //글 삭제
    Route::get("/delete", "PostController@deletePost");
    Route::post("/post", "PostController@writeProcess");
    //첨부파일 업로드
    Route::post("/upload", "PostController@uploadHandle");

    //글수정
    Route::get("/mod", "PostController@modPost");
}
