@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Post')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Customer
          <small>Edit Customer</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.managecustomers.index') }}">Customers</a></li>
          <li class="active">Edit Post</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($customer, [
                  'method' => 'PUT',
                  'route'  => ['backend.managecustomers.update', $customer->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('customer.backend.managecustomer.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
