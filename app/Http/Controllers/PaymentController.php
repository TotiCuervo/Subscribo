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
        dd($request->all());
    }

}
