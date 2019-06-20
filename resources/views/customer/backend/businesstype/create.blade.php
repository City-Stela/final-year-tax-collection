@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new business type')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Business Type
          <small>Add New Business Type</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.businesstypes.index') }}">Business Type</a></li>
          <li class="active">Add New</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($business_type, [
                  'method' => 'POST',
                  'route'  => 'backend.businesstypes.store',
                  'id' => 'business-type-form'
              ]) !!}

              @include('customer.backend.businesstype.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
