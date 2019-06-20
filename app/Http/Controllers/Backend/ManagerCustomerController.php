<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Payment;
use App\Customer;

class ManagerCustomerController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers= Customer::with('businessTypes','payments')->orderby('name')->paginate(5);
        $customer_count = Customer::count();
        return view('customer.backend.managecustomer.index',compact('customers','customer_count'));
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
        $customer = Customer::findOrFail($id);
        return view("customer.backend.managecustomer.edit", compact('customer'));
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
