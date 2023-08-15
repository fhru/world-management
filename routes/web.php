<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/blog', function () {

    $blog_post = [
        [
            "title" => "Meong",
            "author" => "Fahru Rahman",
            "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, nihil magnam veniam illum omnis officia voluptas laboriosam. Voluptatum fugiat dignissimos amet vel enim totam? Labore facilis alias asperiores ut enim accusantium veritatis sed provident velit molestiae dignissimos, ullam dicta cupiditate ratione recusandae veniam nostrum amet aperiam fugiat et adipisci iste, laborum eligendi. Quia illo omnis fuga excepturi laborum pariatur dignissimos ipsum possimus explicabo voluptate, repudiandae sint libero vitae numquam laudantium tempore blanditiis consectetur nam reprehenderit dolores quisquam voluptatum. Magni eum ipsam facilis ipsum. Necessitatibus, maiores commodi! Soluta temporibus eveniet error?"
        ],
        [
            "title" => "Kucing",
            "author" => "Ajis Mutolib",
            "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, nihil magnam veniam illum omnis officia voluptas laboriosam. Voluptatum fugiat dignissimos amet vel enim totam? Labore facilis alias asperiores ut enim accusantium veritatis sed provident velit molestiae dignissimos, ullam dicta cupiditate ratione recusandae veniam nostrum fuga excepturi laborum pariatur dignissimos ipsum possimus explicabo voluptate, repudiandae sint libero vitae numquam laudantium tempore blanditiis consectetur nam reprehenderit dolores quisquam voluptatum. Magni eum ipsam facilis ipsum. Necessitatibus, maiores commodi! Soluta temporibus eveniet error?"
        ],
    ];

    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fahru Rahman",
        "email" => "fahrurahman@facebook.com",
    ]);
});
