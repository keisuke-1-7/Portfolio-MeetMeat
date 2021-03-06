<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class ChargeController extends Controller
{
    /*単発決済用のコード*/
    public function charge(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
            
            $totalPrice = $request->totalPrice;
            
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $totalPrice,
                'currency' => 'jpy'
            ));

            return redirect()->route('checkout');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
