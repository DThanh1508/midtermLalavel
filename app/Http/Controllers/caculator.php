<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class caculator extends Controller
{
    public function caculator(Request $req){
        $val = Validator::make($req->all(), [
            'n1'=> 'required|integer',
            'n2'=> 'required|integer',
        ],[
            'n1.required' => 'The number cannot be left blank',
            'n2.required' => 'The number be left blank',
            'n1.integer' => 'The number have to integer',
            'n2.integer' => 'The number have to integer',
        ]);
        if($val->fails()){
            $errors = $val->errors();
            return view('caculator')->withErrors($errors);
        }
        $a = $req-> input('n1');
        $b = $req-> input('n2');
        $cacul = $req-> input('tinh');
        switch ($cacul) {
            case '+':
                # code...
                $result = $a+$b;
                break;
            case '-':
                # code...
                $result = $a-$b;
                break;
            case '*':
                # code...
                $result = $a*$b;
                break;
            case '/':
                # code...
                $result = round($a/$b,2);
                break;
        }
        // if($cacul == '+')
        //     $result = $a+$b;
        // else if ($cacul == '-')
        //     $result = $a-$b;
        // else if ($cacul == '*')
        //     $result = $a*$b;
        // else
        //     $result = round($a/$b,2);
        return view('caculator',compact('result','a','b', 'cacul'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
