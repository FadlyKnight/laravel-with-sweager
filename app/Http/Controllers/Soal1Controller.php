<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal1Controller extends Controller
{
    public function index(Request $request){
        if (!is_numeric($request->parameter)) return response()->json(['msg' => 'parameter only allow numeric'], 400);
        if ($request->parameter < 0) return response()->json(['msg'=> 'parameter only allow positif integer'], 400);

        // BAGI PARAMETER DENGAN 2 UNTUK PEMBATAS  
        // JIKA GANJIL BULATKAN KE ATAS
        // LOOPING TOTAL SEMUA PARAM
        // MASUKKAN ARRAY DIMENSI SESUAI DENGAN Index
        // APABILA SUDAH MENCAPAI BATAS -> maka kurangin array dimensi tersebut

        $param = $request->parameter;
        $batas = $param % 2 == 0 ? $param / 2 : ((int) ($param / 2)) + 1;

        $response = [];
        $indexNaik = true;
        $totalDimensi = 1;
        for ($i=0; $i < $param; $i++) { 
            $dimensi = [];
            $dimensi_arr = [];
            $indexNaik = $i < $batas;
            if ($indexNaik) {
                for ($j=0; $j < $totalDimensi; $j++) {
                    // array_push($dimensi_arr, []);
                    for ($k=0; $k < $totalDimensi; $k++) { 
                        // $dimensi[$j][$k] = $i;
                    }
                    // if ($totalDimensi >= $j) {
                    //     array_push($dimensi_arr, $dimensi);
                    // }
                }
                // for ($x=0; $x < $totalDimensi; $x++) { 
                //     for ($d=0; $d < $totalDimensi; $d++) { 
                //         $dimensi[$x][] = $i;
                //     }
                // }
                $totalDimensi++;
            } else {
                $totalDimensi--;
                for ($d=0; $d < $totalDimensi; $d++) { 
                    $dimensi[] = $i;
                }
            }
            array_push($response, $dimensi_arr);
        }
        dd($response);

    }
}
