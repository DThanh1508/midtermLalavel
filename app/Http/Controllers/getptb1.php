<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getptb1 extends Controller
{
    public function getptb1(Request $req)
    {
        # code...
        $a = $req->input('a');
        $b = $req->input('b');
        if($a==0)
            if($b==0)
                $kq = "PT có V số N";
            else $kq ="PTVN";
        else $kq ="PTCN x=".round(-$b/$a,2);
        return view('ptb1',compact('a','b','kq'));
    }
    //
}
