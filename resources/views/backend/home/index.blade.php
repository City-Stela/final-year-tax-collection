@extends('layouts.backend.main')

@section('title', 'KCCA TAXATION | Dashboar')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dasbhboard
        </h1>
        <ol class="breadcrumb">
          <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body ">
                      <h3>Welcome to KCCA TAXATION SYSTEM</h3>
                      <p class="lead text-muted">Hallo {{ Auth::user()->name }}, Welcome to KCCA TAXATION SYSTEM</p>

                      <h4>Get started</h4>
                      <p><a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Write KCCA TAXATION News posts</a> </p>
                      <p><a href="{{ route('backend.businesstypes.create') }}" class="btn btn-success">Write business types posts</a> </p>
                      <p><a href="{{ route('backend.managecustomers.index') }}" class="btn btn-info">View Kampala business</a> </p>
                      <p><a href="{{ route('backend.managecustomers.index') }}" class="btn btn-danger">View payment status Kampala business</a> </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
