@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Business Types
          <small>Add new Business Type</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('customer.backend.business-type.index') }}">Business Type</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($business_type, [
                  'method' => 'POST',
                  'route'  => 'customer.backend.business-type.store',
                  'files'  => TRUE,
                  'id' => 'business-type-form'
              ]) !!}

              @include('customer.backend.business-type.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.categories.script')
