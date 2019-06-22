<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Customer;
use App\Payment;
use App\PaymentMethod;
use App\BusinessType;

class BusinessTypeController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_types      = BusinessType::with('customer')->orderBy('business_types_amount', 'desc')->paginate(4);
        $businessTypesCount = BusinessType::count();

        return view("customer.backend.businesstype.index", compact('business_types', 'businessTypesCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business_type = new BusinessType();
        return view("customer.backend.businesstype.create", compact('business_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BusinessTypeStoreRequest $request)
    {
        BusinessType::create($request->all());
        return redirect("/backend/businesstypes")->with("message", "New business type was created successfully!");
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
        $business_type = BusinessType::findOrFail($id);
        return view("customer.backend.businesstype.edit", compact('business_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\BusinessTypeUpdateRequest $request, $id)
    {
        BusinessType::findOrFail($id)->update($request->all());
        return redirect("/backend/businesstypes")->with("message", "business type was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *                                                                                                                                                                                                                                         
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\BusinessTypeDestroyRequest $request, $id)
    {
        Customer::where('business_type_id',$id)->update(['business_type_id'=>config('cms.default_business_type_id')]);

        $business_type = BusinessType::findOrFail($id);
        $business_type->delete();

        return redirect("/backend/businesstypes")->with("error-message","Business type was deleted successfully");
    }
}
