<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function GetNumber(Request $request){
        try {
            $indice = $request->n;
            $arr  = [0,1];
            for($i=2; $i<=$indice; $i++){
                $arr[] = $arr[$i-1]+$arr[$i-2];
            }
            return ($arr[$indice]);
        } catch (Exception $th) {
            return false;
        }
    }
}
