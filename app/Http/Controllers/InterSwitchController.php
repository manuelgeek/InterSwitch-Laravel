<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\InterSwitch;

class InterSwitchController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function process($id)
    {

		$InterSwitch = new InterSwitch;

		$order_id = $id;
		$order_total = '160000';
		$customer_fname = 'Geek';
		$customer_lname = 'Manu';
		$redirect_url = route('process.redirect',$id);
		$result = $InterSwitch->make_webpay_payment($redirect_url, $order_id, $order_total, $customer_fname, $customer_lname);

		// dd($InterSwitch);
		return view('process')->withResult($result);
    }

    public function redirect($id)
    {
    	$InterSwitch = new InterSwitch;

		$order_id = $id;
		$order_total = '160000';
		$response = $InterSwitch->check_webpay_response( $order_id,  $order_total);

		// dd($response);
		
		return view('redirect')->withResponse($response);
    }
}
