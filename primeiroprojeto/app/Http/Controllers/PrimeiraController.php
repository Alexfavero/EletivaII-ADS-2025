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

    //ex6
    public function exercicio6()
    {
        return view("exercicio6");
    }

    public function respExercicio6(Request $request)
    {
        $c = $request->valor1;

        $f = ($c * (9 / 5)) + 32;
        return $c . " Cº equivale a " . $f . " Fº. ";
    }
    //ex7
    public function exercicio7()
    {
        return view("exercicio7");
    }

    public function respExercicio7(Request $request)
    {
        $f = $request->valor1;

        $c = ($f - 32) * 5 / 9;
        return $f . " Fº equivale a " . $c . " Cº. ";
    }
    //ex8
    public function exercicio8()
    {
        return view("exercicio8");
    }

    public function respExercicio8(Request $request)
    {
        $altura = $request->valor1;
        $base = $request->valor2;
        $area = ($altura * $base) / 2;
        return "Area do triângulo " . $area;
    }
    //ex9
    public function exercicio9()
    {
        return view("exercicio9");
    }

    public function respExercicio9(Request $request)
    {
        $raio = $request->valor1;
        $pi = M_PI;
        $area = $pi * ($raio ** 2);
        return "Area do círculo " . $area;
    }
    //ex10
    public function exercicio10()
    {
        return view("exercicio10");
    }

    public function respExercicio10(Request $request)
    {
        $altura = $request->valor1;
        $largura = $request->valor2;
        $perimetro = (2 * $altura) + (2 * $largura);
        return "Perimetro do retângulo " . $perimetro;
    }

    //ex11
    public function exercicio11()
    {
        return view("exercicio11");
    }

    public function respExercicio11(Request $request)
    {

        $raio = $request->valor1;
        $pi = M_PI;
        $area = 2 * $pi * $raio;
        return "Perimetro do círculo " . $area;
    }
    //ex12
    public function exercicio12()
    {
        return view("exercicio12");
    }

    public function respExercicio12(Request $request)
    {
        $base = $request->valor1;
        $expoente = $request->valor2;
        $resultado = $base ** $expoente;
        return "{$base} ^ {$expoente} = {$resultado} ";
    }
    //ex13
    public function exercicio13()
    {
        return view("exercicio13");
    }

    public function respExercicio13(Request $request)
    {
        $metro = $request->valor1;
        $centimetro = $metro * 100;
        return "{$metro}m = {$centimetro}cm";
    }
    //ex14
    public function exercicio14()
    {
        return view("exercicio14");
    }

    public function respExercicio14(Request $request)
    {
        $km = $request->valor1;
        $milhas = $km * 0.621371;
        return "{$km}km = {$milhas}milhas";
    }
    //ex15
    public function exercicio15()
    {
        return view("exercicio15");
    }

    public function respExercicio15(Request $request)
    {
        $peso = $request->valor1;
        $altura = $request->valor2;
        $imc = $peso / ($altura ** 2);
        $imcFormatado = number_format($imc, 2);

        switch (true) {
            case ($imc < 18.5):
                echo "Seu IMC é $imcFormatado e sua classificação é: Abaixo do peso";
                break;

            case ($imc >= 18.5 && $imc < 25):
                echo "Seu IMC é $imcFormatado e sua classificação é: Peso normal";
                break;

            case ($imc >= 25 && $imc < 30):
                echo "Seu IMC é $imcFormatado e sua classificação é: Sobrepeso";
                break;

            case ($imc >= 30 && $imc < 35):
                echo "Seu IMC é $imcFormatado e sua classificação é: Obesidade grau I";
                break;

            case ($imc >= 35 && $imc < 40):
                echo "Seu IMC é $imcFormatado e sua classificação é: Obesidade grau II";
                break;

            default:
                echo "Seu IMC é $imcFormatado e sua classificação é: Obesidade grau III (grave)";
                break;
        }
    }
    //ex16
    public function exercicio16()
    {
        return view("exercicio16");
    }

    public function respExercicio16(Request $request)
    {
        $preco = $request->valor1;
        $porcentagem = $request->valor2;
        $desconto = $preco * ($porcentagem / 100);
        $resultado = $preco - $desconto;
        return "{$preco}R$ - {$porcentagem}% = {$resultado} R$";
    }
    //ex17
    public function exercicio17()
    {
        return view("exercicio17");
    }

    public function respExercicio17(Request $request)
    {
        $capital = $request->valor1;
        $taxa = $request->valor2;
        $taxaPorcent = $taxa / 100;
        $periodo = $request->valor3;
        $jurosSimples = $capital * $taxaPorcent * $periodo;
        return "Juros simples : {$jurosSimples} ";
    }
    //ex18
    public function exercicio18()
    {
        return view("exercicio18");
    }

    public function respExercicio18(Request $request)
    {
        $capital = $request->valor1;
        $taxa = $request->valor2;
        $taxaPorcent = $taxa / 100;
        $periodo = $request->valor3;
        $montante = $capital * ((1 + $taxaPorcent) ** $periodo);
        $montanteFormatado = number_format($montante, 2, ',', '.');;
        return "Montante : {$montanteFormatado} R$";
    }
    //ex19
    public function exercicio19()
    {
        return view("exercicio19");
    }

    public function respExercicio19(Request $request)
    {
        $dia = $request->valor1;
        $horas = $dia * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        return $dia > 1
            ? "{$dia} dias equivalem a {$horas}h, {$minutos}m, {$segundos}s"
            : "{$dia} dia equivale a {$horas}h, {$minutos}m, {$segundos}s";
    }
    //ex20
    public function exercicio20()
    {
        return view("exercicio20");
    }

    public function respExercicio20(Request $request)
    {
        $distancia = $request->valor1;
        $tempo = $request->valor2;
        $vm = $distancia / $tempo;
        return "A velocidade média é de {$vm}";
    }
}
