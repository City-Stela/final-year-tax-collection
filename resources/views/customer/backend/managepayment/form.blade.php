<div class="col-xs-6">
  <div class="box">
    <div class="box-body">

        <div class="form-group {{ $errors->has('payment_token') ? 'has-error' : '' }}">
           
            {!! Form::hidden('payment_token',$token,null, ['class' => 'form-control']) !!}

            @if($errors->has('payment_token'))
                <span class="help-block">{{ $errors->first('payment_token') }}</span>
            @endif
        </div>
       
    </div>

    
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Customer</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('customer_id') ? 'has-error' : '' }}">
                {!! Form::select('customer_id', App\Customer::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose customer']) !!}

                @if($errors->has('customer_id'))
                    <span class="help-block">{{ $errors->first('customer_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Status</h3>
            </div>
            <div class="box-body">
                <div class="form-group {{ $errors->has('status_id') ? 'has-error' : '' }}">
                    {!! Form::select('status_id', App\Status::pluck('status_value', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose customer']) !!}
    
                    @if($errors->has('status_id'))
                        <span class="help-block">{{ $errors->first('status_id') }}</span>
                    @endif
                </div>
            </div>
        </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $payment->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.managepayments.index') }}" class="btn btn-default">Cancel</a>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
