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
            "metadata" => [
                "contents" => 5,
            ]
        ]);
        Session::flash('success', 'Payment successful! You will be redirected automatically within 5 seconds...');

        //empty cart


        return back();
    }
}
