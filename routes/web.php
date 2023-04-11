<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',function (){
    return view('page.index');
})->name('acceuil');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', function () {
    $dashboard = [
        "revenue"=>[
            "stat"=>22.345,
            "icon"=>"/image/money.png",
            "text"=>"Total's revenue"
        ],
        "sales"=>[
            "stat"=>134,
            "icon"=>"/image/panier2.jpg",
            "text"=>"Total's sales"
        ],
        "activity"=>[
            "stat"=>22,
            "icon"=>"/image/activity2.jpg",
            "text"=>"Total's activity"
        ],
        "visit"=>[
            "stat"=>225,
            "icon"=>"/image/oeuil3.png",
            "text"=>"Total's visit"
        ]
    ];
    return view('page.admin.index',['dashboard'=>$dashboard]);
})->name('admin_acceuil');
