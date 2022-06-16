<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function getCalc(Request $request) {
        // $dataの中にpostしたデータを格納しviewに渡す
        $data['exchange'] = $request->input('usdoller');
        $data['jpyen'] = ($data['exchange'] * 110);
        
        return view('calculate.num', $data);
    }
}
