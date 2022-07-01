<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tinh extends Controller
{
    public function toanLop1(Request $req)
    {
        $a = $req -> input('a');
        $b = $req -> input('b');
        $tinh = $req -> input('tinh');
        switch ($tinh) {
            case '+':
                # code...
                $ketQua = $a+$b;
                break;
            case '-':
                # code...
                $ketQua = $a - $b;
                break;
            case '*':
                # code...
                $ketQua = $a * $b;
                break;
            case '/':
                # code...
                $ketQua = round($a / $b,2);
                break;
        }
        # code...
        return view('tinh2',compact('tinh','a','b','ketQua'));
    }
    //
}
