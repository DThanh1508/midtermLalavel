<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postptb1 extends Controller
{
    public function postptb1(Request $req)
    {
        // $val = $req->validate([
        //     'a'=> 'required|integer',
        //     'b'=> 'required|integer',
        // ],[
        //     'a.required' => 'a cannot be left blank',
        //     'b.required' => 'b cannot be left blank',
        // ],
        // [
        //     'a.integer' => 'a have to integer',
        //     'b.integer' => 'b have to integer',
        // ]);
        $val = Validator::make($req->all(), [
            'a'=> 'required|integer',
            'b'=> 'required|integer',
        ],[
            'a.required' => 'a cannot be left blank',
            'b.required' => 'b cannot be left blank',
            'a.integer' => 'a have to integer',
            'b.integer' => 'b have to integer',
        ]);
        if($val->fails()){
            $errors = $val->errors();
            return view('ptb1')->withErrors($errors);
        }
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
