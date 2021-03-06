<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PostController::class, "Home"]) -> name("home");
Route::post("/", [PostController::class, "Post"]) -> name("post");
Route::post("/comment", [CommentController::class, "Comment"]) -> name("comment");
Route::post("/update-comment/{id}", [CommentController::class, "Update"]) -> name("update-comment");
Route::post("/delete-comment/{id}", [CommentController::class, "Delete"]) -> name("delete-comment");