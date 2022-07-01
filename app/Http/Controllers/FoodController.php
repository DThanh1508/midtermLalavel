<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
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
        $food1 = Category::find(1)->food()->get();
        $food2 =Category::find(2)->food()->get();
        $food3 =Category::find(3)->food()->get();
        $food4 =Category::find(4)->food()->get();
        return view('index',compact('food1','food2','food3','food4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addFood');
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
    
        $this -> validate($req,[
            'image'=>'required',
            'cate_id'=>'required',
            'fruitName'=>'required',
            'oldPrice'=>'required',
            'newPrice'=>'required',
            'produced_on'=>'required|date'
        ],[
            'image.required'=> 'Bạn chưa chọn ảnh',
            'cate_id.required'=> 'Bạn chưa nhập loại trái cây',
            'fruitName.required'=>'Bạn chưa nhập tên trái cây',
            'oldPrice.required'=>'Bạn chưa nhập giá',
            'newPrice.required'=>'Bạn chưa nhập giá',
            'produced_on.required'=> 'Bạn chưa nhập ngày sản xuất',
            'produced_on.date'=> 'Cột produced_on phải là kiểu ngày!'
        ]);
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
        return view('detail',compact('food'));
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
