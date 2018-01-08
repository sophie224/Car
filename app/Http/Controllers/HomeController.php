<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Carousel;
use App\Icon;
use App\Social;
use App\Service;
use App\Subscriber;
use Charts;
use File;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

   public function index(){

        $subscriber = Subscriber::all();
        $subscriberCounter = count($subscriber);

        $social = Social::all();
        $socialCounter = count($social);

        $services = Service::all();
        $servicesCounter = count($services);

        $carousel = Carousel::all();
        $carouselCounter = count($carousel);

        $chart = Charts::create('percentage', 'justgage')
                 ->title('Subscriber chart')
                 ->elementLabel('Subscriber')
                 ->values([$subscriberCounter,0,50])
                 ->responsive(false)
                 ->height(400)
                 ->width(0);                    

        return view('adminpanel')
              ->with('subscriberCounter', $subscriberCounter)
              ->with('socialCounter', $socialCounter)
              ->with('servicesCounter', $servicesCounter)
              ->with('carouselCounter', $carouselCounter)
              ->with('chart', $chart);
    }

       public function imageUpload($request){

            $destinationPath = "photo";
            $file = $request;
            $extension = $file->getClientOriginalExtension();
            $filename = rand(1111,9999).".".$extension;
            $file->move($destinationPath, $filename);
            $photo = $filename;

        return $photo;
   }

}
