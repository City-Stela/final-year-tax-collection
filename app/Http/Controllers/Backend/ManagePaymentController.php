<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Str;

use App\Payment;
use App\Customer;

class ManagePaymentController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::with('customer','paymentMethod','status')->orderby('updated_at','desc')->paginate(10);
        $payments_count = Payment::count();        
        return view('customer.backend.managepayment.index',compact('payments','payments_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Payment $payment)
    {
        $token = Str::random(15);        
        return view('customer.backend.managepayment.create', compact('payment','token'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PaymentStoreRequest $request)
    {
        Payment::create($request->all());
        return redirect("/backend/managepayments")->with("message", "New payment was created successfully!");
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
        $payment = Payment::findOrFail($id);
        return view("customer.backend.managepayment.edit", compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CustomerUpdateRequest $request, $id)
    {
        Customer::findOrFail($id)->update($request->all());
        return redirect("/backend/managecustomers")->with("message", "customer was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect("/backend/managecustomers")->with("error-message","customer was deleted successfully");
    }
}
