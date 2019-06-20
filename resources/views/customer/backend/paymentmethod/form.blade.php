<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('payment_method_name') ? 'has-error' : '' }}">
            {!! Form::label('payment method') !!}
            {!! Form::text('payment_method_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('payment_method_name'))
                <span class="help-block">{{ $errors->first('payment_method_name') }}</span>
            @endif
        </div>
        
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $payment_method->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.paymentmethods.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
