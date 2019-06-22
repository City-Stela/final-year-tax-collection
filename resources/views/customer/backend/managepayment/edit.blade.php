@extends('layouts.backend.main')

@section('title', 'KCCA TAXATION COLLECTION | Edit Payment')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Manage Payment
          <small>Edit Payment</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.managecustomers.index') }}">Manage Payments</a></li>
          <li class="active">Edit Payment</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($payment, [
                  'method' => 'PUT',
                  'route'  => ['backend.managepayments.update', $payment->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('customer.backend.managepayment.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
