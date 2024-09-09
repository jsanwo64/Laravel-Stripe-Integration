<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        $price = $request->price;
        $quantity = $request->quantity;
        
        $stripeKey = env('STRIPE_SECRET');
        Stripe::setApiKey($stripeKey);

        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        // Replace 'price_xxx' with your actual Stripe Price ID
        $checkout_session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Payment for a service',
                        ],
                        'unit_amount' => $price * 100, // Convert the price to cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . route('stripe.payment.success', [], false),
            'cancel_url' => $YOUR_DOMAIN . route('stripe.payment.cancel', [], false),
        ]);

        return redirect($checkout_session->url);
    }

    public function success()
    {   //view('stripe_pay.cancel');
        return view('stripe.success');
    }

    public function cancel()
    {
        return view('stripe.cancel');
    }
}
