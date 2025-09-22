<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);
//Listar Clientes - GET /clientes -- Route::get('/clientes', [ClienteController::class, 'index'])
//Abrir formulário para inserir registro - GET /clientes/create -- [ClienteController::class, 'create']
//Salvar dados - POST /clientes -- método store
//Mostrar dados do registro - GET /clientes/{id_cliente} -- método show
//Abrir formulário para editar registro - GET /clientes/{id_cliente}/edit --método edit
//Salvar alterações - PUT /clientes/{id_cliente} -- método update
//Excluir um registro - DELETE /clientes/{id_cliente} -- método destroy

Route::get('/teste', [PrimeiraController::class, "teste"]);

Route::get('/exemplo', [PrimeiraController::class, "abrirForm"]);
Route::post('/exemplo_resposta', [PrimeiraController::class, "resposta"]);

Route::get("/exercicio2", [PrimeiraController::class, "exercicio2"]);
Route::post("/resposta_exercicio2", [PrimeiraController::class, "respExercicio2"]);

Route::get("/exercicio3", [PrimeiraController::class, "exercicio3"]);
Route::post("/resposta_exercicio3", [PrimeiraController::class, "respExercicio3"]);

Route::get("/exercicio4", [PrimeiraController::class, "exercicio4"]);
Route::post("/resposta_exercicio4", [PrimeiraController::class, "respExercicio4"]);

Route::get("/exercicio5", [PrimeiraController::class, "exercicio5"]);
Route::post("/resposta_exercicio5", [PrimeiraController::class, "respExercicio5"]);

Route::get("/exercicio6", [PrimeiraController::class, "exercicio6"]);
Route::post("/resposta_exercicio6", [PrimeiraController::class, "respExercicio6"]);

Route::get("/exercicio7", [PrimeiraController::class, "exercicio7"]);
Route::post("/resposta_exercicio7", [PrimeiraController::class, "respExercicio7"]);

Route::get("/exercicio8", [PrimeiraController::class, "exercicio8"]);
Route::post("/resposta_exercicio8", [PrimeiraController::class, "respExercicio8"]);

Route::get("/exercicio9", [PrimeiraController::class, "exercicio9"]);
Route::post("/resposta_exercicio9", [PrimeiraController::class, "respExercicio9"]);

Route::get("/exercicio10", [PrimeiraController::class, "exercicio10"]);
Route::post("/resposta_exercicio10", [PrimeiraController::class, "respExercicio10"]);

Route::get("/exercicio11", [PrimeiraController::class, "exercicio11"]);
Route::post("/resposta_exercicio11", [PrimeiraController::class, "respExercicio11"]);

Route::get("/exercicio12", [PrimeiraController::class, "exercicio12"]);
Route::post("/resposta_exercicio12", [PrimeiraController::class, "respExercicio12"]);

Route::get("/exercicio13", [PrimeiraController::class, "exercicio13"]);
Route::post("/resposta_exercicio13", [PrimeiraController::class, "respExercicio13"]);

Route::get("/exercicio14", [PrimeiraController::class, "exercicio14"]);
Route::post("/resposta_exercicio14", [PrimeiraController::class, "respExercicio14"]);

Route::get("/exercicio15", [PrimeiraController::class, "exercicio15"]);
Route::post("/resposta_exercicio15", [PrimeiraController::class, "respExercicio15"]);

Route::get("/exercicio16", [PrimeiraController::class, "exercicio16"]);
Route::post("/resposta_exercicio16", [PrimeiraController::class, "respExercicio16"]);

Route::get("/exercicio17", [PrimeiraController::class, "exercicio17"]);
Route::post("/resposta_exercicio17", [PrimeiraController::class, "respExercicio17"]);

Route::get("/exercicio18", [PrimeiraController::class, "exercicio18"]);
Route::post("/resposta_exercicio18", [PrimeiraController::class, "respExercicio18"]);

Route::get("/exercicio19", [PrimeiraController::class, "exercicio19"]);
Route::post("/resposta_exercicio19", [PrimeiraController::class, "respExercicio19"]);

Route::get("/exercicio20", [PrimeiraController::class, "exercicio20"]);
Route::post("/resposta_exercicio20", [PrimeiraController::class, "respExercicio20"]);
