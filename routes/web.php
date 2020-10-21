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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {

    $data = config("pasta");

    $tipi_pasta = [
      "Le lunghe" => [],
      "Le corte" => [],
      "Le cortissime" => []
    ];

    foreach ($data as $key => $prodotto) {
      $prodotto["id"] = $key;
      if ($prodotto["tipo"] == "lunga") {
        $tipi_pasta["Le lunghe"][] = $prodotto;

      } elseif ($prodotto["tipo"] == "corta") {
          $tipi_pasta["Le corte"][] = $prodotto;

      } elseif ($prodotto["tipo"] == "cortissima") {
          $tipi_pasta["Le cortissime"][] = $prodotto;
      }
    }

    return view('prodotti', ["tipi_pasta" => $tipi_pasta]);

})->name('prodotti');

Route::get('/prodotti/show/{id}', function ($id) {

    if (config("pasta.$id") == null) {
      abort(404);
    }

    $numero_prodotti = count(config("pasta"));

    $data = config("pasta.$id");

    $next_id = $id + 1;

    $prev_id = $id - 1;



    return view('prodotto-singolo',
      [
        "prodotto" => $data,
        "numero_prodotti" => $numero_prodotti,
        "id" => $id,
        "next_id" => $next_id,
        "prev_id" => $prev_id
      ]
    );

})->where('id', '[0-9]+')->name('dettaglio-prodotto');

Route::get('/news', function () {
    return view('news');
})->name('news');
