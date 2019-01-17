<?php

namespace App\Http\Controllers;

use Auth;
use App\Pakage;
use App\Currency;
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


    public function pakageShow(){
        $pakage=Pakage::all();
        return view('admin.pakage-show')->with('pakage',$pakage);
    }

    public function pakageEdit($id){
        $pakage=Pakage::find($id);
        return view('admin.pakage-edit')->with('pakage',$pakage);
    }

    public function pakageEditPost(Request $request){
        $validation = Validator::make(Input::all(), 
        array(
            'title'   => 'required',
            'cost'      => 'required',
            'o1'      => 'required',
            'o2'      => 'required',
            'o3'      => 'required',
            'o4'      => 'required',
            'o5'      => 'required',
            )
        );




        if($validation->fails()) {
        //withInput keep the users info
        return Redirect::back()->withInput()->withErrors($validation->messages());
         } else {

        Pakage::where('id', $request->input('id'))->update(array(
            'title'    =>  $request->input('title'),
            'cost'    =>  $request->input('cost'),
            'details_one'    =>  $request->input('mo'),
            'details_two'    =>  $request->input('o1'),
            'details_three'    =>  $request->input('o2'),
            'details_four'    =>  $request->input('o3'),
            'details_five'    =>  $request->input('o4'),
            'details_six'    =>  $request->input('o5'),
        ));
        return redirect()->route('pakage.show');

        }
    }

    public function pakageAdd(){
        return view('admin.pakage-add');
    }


    public function pakageAddPost(Request $request){
        $validation = Validator::make(Input::all(), 
        array(
            'title'   => 'required',
            'cost'      => 'required',
            'o1'      => 'required',
            'o2'      => 'required',
            'o3'      => 'required',
            'o4'      => 'required',
            'o5'      => 'required',
            )
        );




        if($validation->fails()) {
        //withInput keep the users info
        return Redirect::back()->withInput()->withErrors($validation->messages());
         } else {

        Pakage::create([
            'title'    =>  $request->input('title'),
            'cost'    =>  $request->input('cost'),
            'details_one'    =>  $request->input('mo'),
            'details_two'    =>  $request->input('o1'),
            'details_three'    =>  $request->input('o2'),
            'details_four'    =>  $request->input('o3'),
            'details_five'    =>  $request->input('o4'),
            'details_six'    =>  $request->input('o5'),
        ]);
        return redirect()->route('pakage.show');

        }
    }

    public function pakageDelete($id){
        $del=Pakage::destroy($id);
        return redirect()->route('pakage.show');
    }



    
    public function currencyShow(){
        $currency=Currency::all();
        return view('admin.currency-show')->with('currency',$currency);
    }

    public function currencyAdd(){
        return view('admin.currency-add');
    } 

    public function currencyEdit($id){
        $currency=Currency::find($id);
        return view('admin.currency-edit')->with('currency',$currency);
    }

    public function currencyEditPost(Request $request){
        $validation = Validator::make(Input::all(), 
        array(
            'name'   => 'required',
            'rate'      => 'required',
            )
        );

        if($validation->fails()) {
        //withInput keep the users info
        return Redirect::back()->withInput()->withErrors($validation->messages());
         } else {

        Currency::where('id',$request->input('id'))->update([
            'name'    =>  $request->input('name'),
            'rate'    =>  $request->input('rate'),
        ]);

        return redirect()->route('currency.show');

        }
    }

    public function currencyAddPost(Request $request){
        $validation = Validator::make(Input::all(), 
        array(
            'name'   => 'required',
            'rate'      => 'required',
            )
        );

        if($validation->fails()) {
        //withInput keep the users info
        return Redirect::back()->withInput()->withErrors($validation->messages());
         } else {

        Currency::create([
            'name'    =>  $request->input('name'),
            'rate'    =>  $request->input('rate'),
        ]);

        return redirect()->route('currency.show');

        }
    }





    public function logout(Request $request) {
      Auth::logout();
      return redirect('/admin/login');
    }


}