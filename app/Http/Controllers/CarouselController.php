<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Auth;
use App\Carousel;
use File;

class CarouselController extends Controller {
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

   public function carouselList(){
        $carousel = Carousel::all();

        return view('/auth/carousel', ['carousel' => $carousel]);
    }

    public function addCarousel(){        
        return view('/auth/addcarousel');
    }

    public function addedCarousel(Request $request){
        $this->validate($request, [
            "title" => "required",
            "text" => "required",
            "image" => "required|image|max:1000",
        ]);

        $photo = "";

        if($request->file('image')){
            $photo = $this->upload->imageUpload($request->file('image'));
        }

        $carousel = new Carousel();
        $carousel->title = $request->get('title');
        $carousel->text = $request->get('text');
        $carousel->img = '/photo/'.$photo;
        $carousel->save();

        return redirect('/adminpanel/carousel');
    }

    public function editCarousel($id, Request $request){
        $carousel = Carousel::where('id', $id)->get();

        return view('/auth/editcarousel', ['carousel' => $carousel]);
    }

    public function editedCarousel($id, Request $request){
        $this->validate($request, [
            "title" => "required",
            "text" => "required",
            "image" => "required|image|max:1000"
        ]);

        $photo = "";

        if($request->file('image')){
            $photo = $this->upload->imageUpload($request->file('image'));
        }

        $carousel = Carousel::where('id', $id)->update([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'img' => '/photo/'.$photo
        ]);

        return redirect('/adminpanel/carousel');
    }

    public function removeCarousel($id, Request $request){
        $deleteCarousel = Carousel::findOrFail($id);

        $deleteCarousel->delete();

        return redirect()->back();
    }

}
