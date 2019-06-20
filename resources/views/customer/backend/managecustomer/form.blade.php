<div class="col-xs-6">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
       
    </div>

    
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('business_type_id') ? 'has-error' : '' }}">
                {!! Form::select('business_type_id', App\BusinessType::pluck('business_types_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose business type']) !!}

                @if($errors->has('business_type_id'))
                    <span class="help-block">{{ $errors->first('business_type_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $customer->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.managecustomers.index') }}" class="btn btn-default">Cancel</a>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
