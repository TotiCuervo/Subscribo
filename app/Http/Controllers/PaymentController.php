<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Laravel\Cashier;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('payments.payment');
    }

    public function pay(Request $request){
        if(Auth::user()){
            $user = Auth::user();
            //pass the user object to the gateway; it must implement BillableContract
            $gateway = new StripeGateway($user);

            //manually create a new Customer instance with Stripe
            $customer = $gateway->createStripeCustomer($request->get('stripe_token'));

            $user->newSubscription('main', 'Subscribo')->create($customer);
        }
    }

}
