<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

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
        $payments = Payment::with('customer','paymentMethod')->orderby('updated_at','desc')->paginate(10);
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
        $customer = new Customer();
        return view('customer.backend.managecustomer.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CustomerStoreRequest $request)
    {
        Customer::create($request->all());
        return redirect("/backend/managecustomers")->with("message", "New payment method was created successfully!");
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
