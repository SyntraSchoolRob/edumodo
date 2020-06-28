<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {
        //order-details user


        //load payment page
        return view('stripe');
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderStripePost(Request $request)
    {
        //make full number: ex 15.25 becomes 1525 for stripe payment
        $c = Session::get('cart')->totalPrice;
        $a = "$c";
        $b = str_replace('.', '', $a);
        if (is_numeric($b)) {
            $a = $b;
            //echo $a;
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $a,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "New Payment.",
        ]);
        Session::flash('success', 'Payment successful! You will be redirected automatically within 5 seconds...');
        //empty cart payment
        return back();
    }
}
