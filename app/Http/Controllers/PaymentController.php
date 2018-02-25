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
        $user = Auth::user();
        return view('payments.payment')->with('user',$user);
    }

    public function pay(Request $request){
        //dd($request->all());
        if (Auth::check()) {
            $user = Auth::user();
            if (!$user->subscribed('main')) {
                $user->newSubscription('main', env('STRIPE_SUB'))->create($request->stripeToken);
                return redirect()->route('subscribo');
            }else{
                return view('payments.payment')->with('user',$user);
            }
        }else{
            return response('unauthorized', 403);
        }

    }

    public function cancel(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
            $user->subscription('main')->cancelNow();
            return redirect()->route('pay');
        }else{
            return response('unauthorized', 403);
        }
    }

    public function resume(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
            $user->subscription('main')->resume();
            return redirect()->route('subscribo');
        }else{
            return response('unauthorized', 403);
        }
    }

}
