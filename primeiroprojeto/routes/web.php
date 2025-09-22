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
