<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{

    public function teste()
    {
        return "Teste em Laravel";
    }

    public function abrirForm()
    {
        return view("exemplo");
    }

    public function resposta(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return "Soma: " . $soma;
    }

    //ex2
    public function exercicio2()
    {
        return view("exercicio2");
    }

    public function respExercicio2(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $sub = $valor1 - $valor2;
        return "Subtração: " . $sub;
    }

    //ex 3
    public function exercicio3()
    {
        return view("exercicio3");
    }

    public function respExercicio3(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multi = $valor1 * $valor2;
        return "Multiplicação: " . $multi;
    }

    //ex4
    public function exercicio4()
    {
        return view("exercicio4");
    }

    public function respExercicio4(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 != 0) {
            $div = $valor1 / $valor2;
            return "Divisão: " . $div;
        }
        return "O segundo valor deve ser diferente de 0";
    }

    //ex5
    public function exercicio5()
    {
        return view("exercicio5");
    }

    public function respExercicio5(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $media = ($valor1 + $valor2 + $valor3) / 3;
        return "Média = " . $media;
    }
}
