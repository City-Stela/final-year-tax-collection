@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Payment Methods
          <small>Edit Payment Methods</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.paymentmethods.index') }}">Payment Method</a></li>
          <li class="active">Edit Payment Method</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($payment_method, [
                  'method' => 'PUT',
                  'route'  => ['backend.paymentmethods.update', $payment_method->id],
                  'id' => 'post-form'
              ]) !!}

              @include('customer.backend.paymentmethod.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

