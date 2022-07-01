<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Hash;
// import Storage class
use Illuminate\Support\Facades\Storage;
use File;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods =Food::all();
        return view('index',['foods'=>$foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addDB');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $name="";
        if ($req->hasfile('image')) {
            # code...
            $this->validate($req,[
                'image'=>'mimes:jpg,png,gif,jpeg|max:4048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=> 'Chỉ chấp nhận hình ảnh dưới 2mb'
            ]);
            $file = $req -> file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/assets/images');
            $file->move($destinationPath,$name);
        }
        $this -> validate($req,[
            'cate_id'=>'required',
            'fruitName'=>'required',
            'oldPrice'=>'required',
            'newPrice'=>'required',
            'produced_on'=>'required|date'
        ],[
            'cate_id.required'=> 'Bạn chưa nhập loại trái cây',
            'fruitName.required'=>'Bạn chưa nhập tên trái cây',
            'oldPrice.required'=>'Bạn chưa nhập giá',
            'newPrice.required'=>'Bạn chưa nhập giá',
            'produced_on.required'=> 'Bạn chưa nhập ngày sản xuất',
            'produced_on.date'=> 'Cột produced_on phải là kiểu ngày!'
        ]);

        $food=new Food();
        $food -> cate_id = $req->cate_id;
        $food -> fruitName = $req->fruitName;
        $food -> oldPrice =$req->oldPrice;
        $food -> newPrice =$req->newPrice;
        $food->produced_on=$req->produced_on;
        $food->image=$name;
        $food->save();
        return redirect()->route('foods.index')->with('success','Bạn đã cập nhật nhật thành công');
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
        $food =Food::find($id);
        return view('show',compact('foods'));
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
    public function update(Request $req, $id)
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
