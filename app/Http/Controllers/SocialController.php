<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Auth;
use App\Social;
use File;


class SocialController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $upload;

    public function __construct() {

        $this->middleware('auth');
        $this->upload = new HomeController();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function socialList(){
        $socialList = Social::all();

        return view('/auth/social', ['socialList' => $socialList]);
    } 

    public function addSocial(){
        return view('/auth/addsocial');
    }

    public function addedSocial(Request $request){
        $this->validate($request,[
            "icon" => "required|image|max:1000",
            "link" => "required"
        ]);

        $photo = "";

        if($request->file('icon')){
            $photo = $this->upload->imageUpload($request->file('icon'));
        }

        $social = new Social();
        $social->link = $request->get('link');
        $social->icon = '/photo/'.$photo;
        $social->save();

        return redirect('/adminpanel/social');
    }

    public function editSocial($id, Request $request){
        $social = Social::where('id', $id)->get();

        return view('/auth/editsocial', ['social' => $social]);
    }  

    public function editedSocial($id, Request $request){
        $this->validate($request,[
            "icon" => "required|image|max:1000",
            "link" => "required"
        ]);
        
        $photo = "";

        if($request->file('icon')){
            $photo = $this->upload->imageUpload($request->file('icon'));
        }

        $social=Social::where('id', $id)->update([
            'icon'=> '/photo/'.$photo,
            'link' => $request->get('link')
        ]);

        return redirect('/adminpanel/social');
    } 

}
