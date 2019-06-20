@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new payment method')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Payment Methods
          <small>Add New Payment Method</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.paymentmethods.index') }}">Payment Methods</a></li>
          <li class="active">Add New</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($payment_method, [
                  'method' => 'POST',
                  'route'  => 'backend.paymentmethods.store',
                  'id' => 'business-type-form'
              ]) !!}

              @include('customer.backend.paymentmethod.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
