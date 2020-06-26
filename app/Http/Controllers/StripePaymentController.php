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
         * 1. Send order details to database
         *
         * 2. Stripe integration
         *
         */


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 1000,
            //"amount" => Session::get('cart')->totalPrice,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "New Payment.",
        ]);
        Session::flash('success', 'Payment successful! You will be redirected automatically within 5 seconds...');

        //empty cart


        return back();
    }
}
