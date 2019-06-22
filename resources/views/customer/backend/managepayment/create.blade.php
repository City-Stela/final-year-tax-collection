@extends('layouts.backend.main')

@section('title', 'KCCA TAXATION COLLECTION | Add new payment')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Manage Payment
          <small>Add new Payment</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.managepayments.index') }}">Manage Customers</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($payment, [
                  'method' => 'POST',
                  'route'  => 'backend.managepayments.store',
                  'files'  => TRUE,
                  'id' => 'manage-payment-form'
              ]) !!}

              @include('customer.backend.managepayment.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
