<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1', ['soma' => $soma]);
    }

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->num1;
        $valor2 = $request->num2;
        $sub = $valor1 - $valor2;
        return view('exer2', ['sub' => $sub]); 
    }

    public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){
        $valor1 = $request->num1;
        $valor2 = $request->num2;
        $mult = $valor1 * $valor2;
        return view('exer3', ['mult' => $mult]); 
    }

        public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){
        $valor1 = $request->num1;
        $valor2 = $request->num2;
        if ($valor2 == 0){
            return view('exer4', ['div' => 'Não é permitido divisão por 0']);
        }else{
            $div = $valor1 / $valor2;
            return view('exer4', ['div' => $div]); 
        }
    }

    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $nota1 = $request->num1;
        $nota2 = $request->num2;
        $nota3 = $request->num3;

        $media = ($nota1 + $nota2+ $nota3) / 3; 
        return view('exer5', ['media' => $media]);
    }

    public function abrirFormExer6(){
        return view('exer6');
    }

    public function respostaExer6(Request $request){
        $celsius = $request-> celsius;
        $far = $celsius * 1.8 + 32;
        return view('exer6', ['far' => $far]);
    }


    public function abrirFormExer7(){
        return view('exer7');
    }

    public function respostaExer7(Request $request){
        $far = $request-> far;
        $celsius = ($far - 32) / 1.8;
        return view('exer7', ['celsius' => $celsius]);
    }

    
    public function abrirFormExer8(){
        return view('exer8');
    }

    public function respostaExer8(Request $request){
        $altura = $request->altura;
        $largura = $request->largura; 
        $area = $altura * $largura; 
        return view('exer8', ['area' => $area]);
    }

    public function abrirFormExer9(){
        return view('exer9');
    }

    public function respostaExer9(Request $request){
        $raio = $request->raio;
        $area = M_PI * pow($raio, 2);
        return view('exer9', ['area' => $area]);
    }
}