<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas=Portfolio::all();
        return view('admin.index')->with('datas',$datas);
    }

    public function portfolio($id)
    {
        $data=Portfolio::find($id);
        return view('single-portfolio')->with('data',$data);
    }

    public function portfolioEdit($id){
         $data=Portfolio::find($id);
        return view('admin.edit-portfolio')->with('data',$data);

    }
    public function portfolioEditPost(Request $request){


        $validation = Validator::make(Input::all(), 
        array(
            'name'      => 'required',
            'description'   => 'required',
            'category'      => 'required',
            )
        );




        if($validation->fails()) {
        //withInput keep the users info
        return Redirect::back()->withInput()->withErrors($validation->messages());
         } else {

        Portfolio::where('id', $request->input('id'))->update(array(
            'name'    =>  $request->input('name'),
            'description'    =>  $request->input('description'),
            'category'    =>  $request->input('category'),
        ));
        return redirect()->route('home');

        }
    }
}