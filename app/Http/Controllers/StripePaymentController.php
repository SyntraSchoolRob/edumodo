<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
        return view('stripe');
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderStripePost(Request $request)
    {
        /**
         * This function handles two things
         *
         * 1. send order details to db
         *
         * 2. stripe payment
         *
         */


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 1000,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "New Payment.",
        ]);
        Session::flash('success', 'Payment successful! You will be redirected automatically within 5 seconds...');
        if(Session::has('success')){

            return back();
        }
        return back();
    }
}
