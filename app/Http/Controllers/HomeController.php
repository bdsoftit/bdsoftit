<?php

namespace App\Http\Controllers;

use App\Image;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(){
        return view('landing');
    }
    public function portfolio($id)
    {
        $data=Portfolio::find($id);
        $imageId=Portfolio::where('id',$id)->pluck('id');
        $image=Image::where('portfolio_id',$imageId)->pluck('url');

        $t=$image[0];
        return view('single-portfolio')->with('data',$data)->with('image',$image)->with('t',$t);
    }



    public function contactUSPost(Request $request) {
      $data = array(
        'name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email'),
        'subject'=>$request->input('subject'),
        'service'=>$request->input('service'),
        'massage'=>$request->input('massage'),
    );
   
      Mail::send(['html'=>'mail'], $data, function($message) use ($data) {
         $message->to('fratechnology@gmail.com', 'BD Soft IT')->subject
            ('Genarel Contact');
         $message->from($data['email'],$data['name']);
      });
      Session::flash('message', "Your email successfully send!");
       return redirect()->back();   
   }
}
