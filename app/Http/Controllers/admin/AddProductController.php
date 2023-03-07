<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddProductModel;


class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rapid.admin.addproduct');
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
        //validation applied here
        $request->validate([

            "productname"=>"required",
            "price"=>"required",
            
        ]);

          //insert data in contacts table
          date_default_timezone_set("Asia/Calcutta");
          $data=array(
              "productname"=>$request->productname,
              "price"=>$request->price
              
          );
  
          //elequent query builder using ORM(Object Relational Mapping model)
          AddProductModel::create($data);
         
          //return view('rapid.admin.addcategory');
          return redirect('admin-login/admin-addproduct')->with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddProductModel::all();
        return view("rapid.admin.manageproduct",["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //edit from tablename where id='id';
         $ed=AddProductModel::where('id',$id)->first();
         return view('rapid.admin.editproduct',["ed"=>$ed]);
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
         //insert data in Category table
         $ed=array("productname"=>$request->productname,
                    "price"=>$request->price);
         AddProductModel:: where('id',$id)->update($ed);
         return redirect ('admin-login/admin-manageproduct')->with('upd','Your Category is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //delete from tablename where id='id';
         AddProductModel::where('id',$id)->delete();
         return redirect('admin-login/admin-manageproduct')->with('del','Your Category successfully deleted');
    }
}
