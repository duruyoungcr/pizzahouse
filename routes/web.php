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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    // $pizza = ['types' => ['thin', 'pan', 'thick'], 'sizes' => ['small', 'medium', 'large', 'extra-large']];
    $pizzas = [
        [
            'type' => 'thin',
            'size' => 'small',
            'name' => 'Double Cheese'
        ],
        [
            'type' => 'pan',
            'size' => 'large',
            'name' => 'Chicken Supreme'
        ],
        [
            'type' => 'thin',
            'size' => 'large',
            'name' => 'Pepperoni and Cheese'
        ]
    ];
    return view('pizzas', ["pizzas" => $pizzas , "name" => request('name')]);
});

Route::get('/pizzas/{id}', function ($id) {
    
    return view('pizza', ["id" => $id]);
});