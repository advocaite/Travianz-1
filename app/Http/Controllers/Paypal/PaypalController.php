<?php

namespace App\Http\Controllers\Paypal;

use App\Http\Requests\PaypalPostNotify;
use App\Models\Paypal\Paypal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Paypal\Paypal $paypal
     * @return \Illuminate\Http\Response
     */
    public function show(Paypal $paypal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Paypal\Paypal $paypal
     * @return \Illuminate\Http\Response
     */
    public function edit(Paypal $paypal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Paypal\Paypal $paypal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paypal $paypal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Paypal\Paypal $paypal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paypal $paypal)
    {
        //
    }

    public function postNotify(PaypalPostNotify $request)
    {
        $provider = new ExpressCheckout;

        $request->merge(['cmd' => '_notify-validate']);
        $post = $request->all();

        try {
            $response = (string)$provider->verifyIPN($post);
        } catch (\Exception $e) {

        }

        if ($response === 'VERIFIED') {
            // Your code goes here ...
        }
    }
}
