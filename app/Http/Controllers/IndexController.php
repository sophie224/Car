<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Service;
use App\Social;
use App\Subscriber;
use Mail;
use Session;


class IndexController extends Controller {

		public function getAll(){
			$carousel = Carousel::all();
			$service = Service::all();
			$social = Social::all();


			return view('/index', ['carousel'=>$carousel, 'service' => $service, 'social' => $social ]);
		}

		public function postContact(Request $request){
			$this->validate($request,[
				'email' => 'required|email',
				'name' => 'required',
				'subject' => 'required',
				'bodyMessage' => 'required',
				'gender' => 'required'
			]);

			$subscribe = "";
			$status = "No";

			if(isset($request->subscribe)){

			$subscribe = $request->subscribe;
			$status = 'Yes';

			$subscriber = new Subscriber();
			$subscriber->name = $request->get('name');
			$subscriber->email = $request->get('email');

			$subscriberValue ="";
			foreach ($subscribe as $value) {
				$subscriberValue .= $value.",";
			}

			$subscriber->subscribe = rtrim($subscriberValue,", ");
			$subscriber->save();
		}

			$data = array(
				'email' => $request->email,
				'name' => $request->name,
				'subject' => $request->subject,
				'bodyMessage' => $request->bodyMessage,
				'gender' => $request->gender,
				'status' => $status,
				'subscribe' => $subscribe
			);

			Mail::send('emails.contact', $data, function($message) use ($data){
				$message->from($data['email']);
				$message->to('repaircar9@gmail.com');
				$message->subject($data['subject']);
			});

			Session::flash('success', 'Thank you for your intereset for us, your message has been sent!');

			return redirect('/#contact');
		}


    
}
