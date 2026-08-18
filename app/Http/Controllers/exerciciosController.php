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

    public function abrirFormExer10(){
        return view('exer10');
    }

    public function respostaExer10(Request $request){
        $altura = $request->altura;
        $largura = $request->largura; 
        $perimetro = $altura * 2 + $largura * 2; 
        return view('exer10', ['perimetro' => $perimetro]);
    }

    public function abrirFormExer11(){
        return view('exer11');
    }

    public function respostaExer11(Request $request){
        $raio = $request->raio;
        $perimetro = 2 * M_PI * $raio;
        return view('exer11', ['perimetro' => $perimetro]);
    }

    public function abrirFormExer12(){
        return view('exer12');
    }

    public function respostaExer12(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $potencia = pow($valor1, $valor2);
        return view('exer12', ['potencia' => $potencia]);
    }

    public function abrirFormExer13(){
        return view('exer13');
    }

    public function respostaExer13(Request $request){
        $metros = $request->metros;
        $cm = $metros * 100;
        return view('exer13', ['cm' => $cm]);
    }

    public function abrirFormExer14(){
        return view('exer14');
    }

    public function respostaExer14(Request $request){
        $km = $request->km;
        $milhas = $km * 0.621371;
        return view('exer14', ['milhas' => $milhas]);
    }

    public function abrirFormExer15(){
        return view('exer15');
    }

    public function respostaExer15(Request $request){
        $peso = $request->peso;
        $altura = $request->altura;
        $imc = $peso / pow($altura, 2);
        return view('exer15', ['imc' => $imc]);
    }

    public function abrirFormExer16(){
        return view('exer16');
    }

    public function respostaExer16(Request $request){
        $valor = $request->valor;
        $desc = $request->desc;
        $valorDesc = $valor - $valor * ($desc / 100);
        return view('exer16', ['valorDesc' => $valorDesc]);
    }

    public function abrirFormExer17(){
        return view('exer17');
    }

    public function respostaExer17(Request $request){
        $capital = $request->capital;
        $taxa = $request->taxa;
        $periodo = $request->periodo;
        $montante = $capital + $capital * ($taxa / 100) * $periodo;
        return view('exer17', ['montante' => $montante]);
    }
}