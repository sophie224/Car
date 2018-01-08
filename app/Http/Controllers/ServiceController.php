<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Auth;
use App\Service;
use File;

class ServiceController extends Controller {
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

    public function servicesList(){
        $service = Service::all();

        return view('/auth/services', ['service' => $service]);
    }

    public function addServices(){
        return view('/auth/addservices');
    }

    public function addedServices(Request $request){
        $this->validate($request,[
            "title" => "required",
            "image" => "required|image|max:1000|mimes:svg"
        ]);

        $photo = "";

        if($request->file('image')){
            $photo = $this->upload->imageUpload($request->file('image'));
        }

        $service = new Service();
        $service->title = $request->get('title');
        $service->img = '/photo/'.$photo;
        $service->save();

        return redirect('/adminpanel/services');
    }
    

    public function editServices($id, Request $request){
     $service = Service::where('id', $id)->get();
     
     return view('/auth/editservices', ['service' => $service]);
    }

    public function editedServices($id, Request $request){
        $this->validate($request,[
            "title" => "required",
            "image" => "required|image|max:1000|mimes:svg"
        ]);

        $photo = "";

       if($request->file('image')){
            $photo = $this->upload->imageUpload($request->file('image'));
        }

        $service = Service::where('id', $id)->update([
            'title' => $request->get('title'),
            'img' => '/photo/'.$photo,
        ]);

        return redirect('/adminpanel/services');
    }
    public function removeServices($id){
        $deleteService = Service::findOrFail($id);

        $deleteService->delete();

        return redirect()->back();
    }
}
