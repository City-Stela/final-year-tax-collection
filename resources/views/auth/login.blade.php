@extends('layouts.tax')

@section('title', 'Blog')

@section('content')
<div class="container-fluid">

    <div class="row no-gutter">
   
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-5">KCCA TAX COLLECTION</h3>
                            <p class="text-muted mb-4">Create a login</p>

    <form method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
        {{-- <span class="fa fa-envelope form-control-feedback"></span> --}}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        {{-- <span class="fa fa-lock form-control-feedback"></span> --}}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
    <br>
    <div class="text-center d-flex justify-content-between mt-4"><p>&nbsp;&nbsp;&nbsp; <a href="/" class="font-italic text-muted"> 
      <u>back to the site</u></a></p></div>
  </div>
</div>
</div><!-- End -->

</div>
</div><!-- End -->

</div>
</div>

@endsection
