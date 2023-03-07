<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategoryModel;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("rapid.admin.addsubcategory");
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

            "subcategoryname"=>"required",
            
        ]);

          //insert data in contacts table
          date_default_timezone_set("Asia/Calcutta");
          $data=array(
              "subcategoryname"=>$request->subcategoryname,
              
          );
  
          //elequent query builder using ORM(Object Relational Mapping model)
          SubCategoryModel::create($data);
         
          //return view('rapid.admin.addcategory');
          return redirect('admin-login/admin-addsubcategory')->with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=SubCategoryModel::all();
        return view("rapid.admin.managesubcategory",["data"=>$data]);
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
        $ed=SubCategoryModel::where('id',$id)->first();
        return view('rapid.admin.editsubcategory',["ed"=>$ed]);
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
         $ed=array("subcategoryname"=>$request->subcategoryname);
         SubCategoryModel:: where('id',$id)->update($ed);
         return redirect ('admin-login/admin-managesubcategory')->with('upd','Your Category is Successfully Updated');
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
         SubCategoryModel::where('id',$id)->delete();
         return redirect('admin-login/admin-managesubcategory')->with('del','Your Category successfully deleted');
    }
}
