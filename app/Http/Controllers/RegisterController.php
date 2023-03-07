<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCustomerMail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rapid.register');
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
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "pass"=>"required",
            "cpass"=>"required",
            "mobile"=>"required",
            "address"=>"required"
        ]);

        // return view('rapid.register');


        //insert data in customer table
        date_default_timezone_set("Asia/Calcutta");
        $data=array("name"=>$request->name,
        "email"=>$request->email,
        "mobile"=>$request->mobile,
        "password"=>$request->pass,
        "address"=>$request->address
    );


    RegisterModel::create($data);

    //sending mail from mail packages
    Mail::to('kripalsinhraa043@gmail.com')->send(new SendCustomerMail($data));
    return redirect('/register')->with('success','Thanks for contact with us we will successfully Received Your Information On Our Email');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=RegisterModel::all();
            return view('rapid.admin.managecustomer',["data"=>$data]);
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
         //delete from tablename where id='id';
         RegisterModel::where('id',$id)->delete();
         return redirect('admin-login/managecustomer')->with('del','Your Contact successfully deleted');
    }
}
