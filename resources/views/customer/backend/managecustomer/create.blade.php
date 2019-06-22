@extends('layouts.backend.main')

@section('title', 'KCCA TAXATION COLLECTION | Add new business')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Manage Customers
          <small>Add new Customer</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.managecustomers.index') }}">Manage Customers</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($customer, [
                  'method' => 'POST',
                  'route'  => 'backend.managecustomers.store',
                  'files'  => TRUE,
                  'id' => 'manager-customer-form'
              ]) !!}

              @include('customer.backend.managecustomer.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
