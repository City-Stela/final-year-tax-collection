<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\PaymentMethod;
use App\Payment;



class PaymentMethodController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods      = PaymentMethod::with('payments')->orderBy('payment_method_name', 'desc')->paginate(4);
        $paymeny_method_count = PaymentMethod::count();

        return view("customer.backend.paymentmethod.index", compact('payment_methods', 'paymeny_method_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment_method = new PaymentMethod();
        return view("customer.backend.paymentmethod.create", compact('payment_method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PaymentMethodStoreRequest $request)
    {
        PaymentMethod::create($request->all());
        return redirect("/backend/paymentmethods")->with("message", "New payment method was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        return view("customer.backend.paymentmethod.edit", compact('payment_method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PaymentMethodUpdateRequest $request, $id)
    {
        PaymentMethod::findOrFail($id)->update($request->all());
        return redirect("/backend/paymentmethods")->with("message", "payment method was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\PaymentMethodDestoryRequest $request, $id)
    {
        Payment::where('payment_method_id',$id)->update(['payment_method_id'=>config('cms.default_payment_method_id')]);

        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->delete();

        return redirect("/backend/paymentmethods")->with("error-message","payment method was deleted successfully");
    }
}
