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



// ========================================================================================================
// -------------------------------------------------------------------------------------------------------
// ----->  FRONT OFFICE
// -------------------------------------------------------------------------------------------------------

Route::get('/',function (){
    return view('pages.home');
})->name('acceuil');



// ========================================================================================================
// -------------------------------------------------------------------------------------------------------
// ----->  BACK OFFICE
// -------------------------------------------------------------------------------------------------------

Route::prefix('admin')->group(function(){
    Route::get('/',function (){
        $dashboard = [
            "revenue"=>[
                "name"=>"revenue",
                "stat"=>22.345
            ],
            "sales"=>[
                "name"=>"sales",
                "stat"=>134
            ],
            "activity"=>[
                "name"=>"activity",
                "stat"=>22
            ],
            "visit"=>[
                "name"=>"visit",
                "stat"=>225
            ]
        ];
        return view('pages.admin.home',['dashboard'=>$dashboard]);
    })->name('adminHome');

    Route::get('/chats',function (){
        return view('pages.admin.chat');
    })->name('chats');

    Route::get('/historiques',function (){
        return view('pages.admin.historique');
    })->name('historiques');

    Route::get('/products',function (){
        return view('pages.admin.menu');
    })->name('produits');
});
