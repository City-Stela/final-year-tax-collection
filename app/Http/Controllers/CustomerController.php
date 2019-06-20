<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Payment;
use App\PaymentMethod;
use App\BusinessType;


use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function export_pdf()
    {
      // Fetch all customers from database
      $data = Customer::get();
      // Send data to the view using loadView function of PDF facade
      $pdf = PDF::loadView('pdf.customers', $data);
      // If you want to store the generated pdf to the server then you can use the store function
      $pdf->save(storage_path().'_filename.pdf');
      // Finally, you can download the file using download function
      return $pdf->download('customers.pdf');

    // $data = ['title' => 'Welcome to My Blog'];
    // $pdf = PDF::loadView('myPDF', $data);
   
    // return $pdf->download('demo.pdf');
    }

    public function pdfexport($id)
    {
        $payment= Payment::find($id);
        $pdf =PDF::loadView('customer.pdf',['payment'=>$payment])->setPaper('a4','portrait');
        $fileName = $payment->customer->name;

        return $pdf->stream($fileName.'.pdf');
    }

    public function index()
    {
        //
        $data = Customer::all();
        return view("invoice", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function payments()
     {
        $payments = Payment::with('customer','paymentMethod')->orderby('updated_at','desc')->get();
        
        return view('customer.payments',compact('payments'));
     }


     public function customer(Customer $customer)
    {
        $name = '';
        $customerName = $customer->name;

        $payments = $customer->payments()
                          ->latestFirst();

         return view("customer.payments", compact('payments', 'customerName','name'));
    }


    public function businessType(BusinessType $businessType)
    {
        $type = '';
        $business_type_amount=0.00;
        $businessTypeName = $businessType->type;
        $businessTypeAmount = $businessType->business_type_amount;

        $payment = $businessType->customer()
                          ->latestFirst();

         return view("customer.payments", compact('payments', 'businessTypeName','type','business_type_amount'));
    }


    public function paymentMethod(PaymentMethod $paymentMethod)
    {
        $payment_methods_name = '';
        $paymentMethodName = $paymentMethod->payment_methods_name;

        $payment = $paymentMethod->payments()
                          ->latestFirst();

         return view("customer.payments", compact('payment', 'paymentMethodName','payment_methods_name'));
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
