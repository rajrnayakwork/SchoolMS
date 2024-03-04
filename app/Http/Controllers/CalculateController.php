<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calculateNumbers($answer = null){
        return view('calculate_numbers')->with('answer',$answer);
    }

    public function calculate(Request $request){
        $method = $request->calculate;
        $number1 = $request->number1;
        $number2 = $request->number2;
        if($method && $number1 && $number2){
            if ($method == 'sum') {
                $answer = $number1 + $number2;
            }
            else if ($method == 'sub') {
                $answer = $number1 - $number2;
            }
            else if ($method == 'mul') {
                $answer = $number1 * $number2;
            }
            else if ($method == 'div') {
                $answer = $number1 / $number2;
            }
            return $this->calculateNumbers($answer);
            // return redirect()->route('calculate_numbers',[$answer]);
        }else{
            return redirect()->route('calculate_numbers');
        }
    }
}
