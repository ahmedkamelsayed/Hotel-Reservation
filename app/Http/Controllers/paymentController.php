<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class paymentController extends Controller
{
    public function index()
    {
    	return view('/payment');
	}
	
	// payment by visa function
    public function paymentvisa(Request $request) {

    	$this->validate($request, [
			'email'        => 'required|email',
            'name'         => 'required',
            'name_on_card' => 'required',
            'card_no'      => 'required',
            'ex_month'     => 'required',
            'ex_year'      => 'required',
            'cvv'          => 'required'
			
			]);

		$data = array(
			'email' => $request->email,
			'name' => $request->name,
			'name_on_card' => $request->name_on_card,
			'card_no' => $request->card_no,
			'ex_month' => $request->ex_month,
			'ex_year' => $request->ex_year,
			'cvv' => $request->cvv
			);

		Mail::send('email.paymentvisa', $data, function($message) use ($data){
			$message->from('death.dealer1099@gmail.com' , 'mohamed magdy');
			$message->to($data['email']);
			$message->subject('Reservation Details');
		});

		Session::flash('success', 'Your Email was Sent!');
		//return redirect('/');
		  return view('master');
	}

	//payment cash function
	public function paymentcash(Request $request) {

    	$this->validate($request, [
			'email'        => 'required|email',
            'name'         => 'required'
			]);

		$data = array(
			'email' => $request->email,
			'name' => $request->name
			);

		Mail::send('email.paymentcash', $data, function($message) use ($data){
			$message->from('death.dealer1099@gmail.com' , 'mohamed magdy');
			$message->to($data['email']);
			$message->subject('Reservation Details');
		});

		Session::flash('success', 'Your Email was Sent!');
		//return redirect('/');
		 return view('master');
	}

}
		//	$message->from('ahmedkamil431998@gmail.com' , 'ahmad kamel');
		//	$message->from('mohamed.magdya109@gmail.com' , 'mohamed magdy');
        // return view('master');