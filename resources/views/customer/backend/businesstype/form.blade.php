<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('business_types_name') ? 'has-error' : '' }}">
            {!! Form::label('business type name') !!}
            {!! Form::text('business_types_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('business_types_name'))
                <span class="help-block">{{ $errors->first('business_types_name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('business_types_amount') ? 'has-error' : '' }}">
            {!! Form::label('business types amount') !!}
            {!! Form::number('business_types_amount', null, ['class' => 'form-control']) !!}

            @if($errors->has('business_types_amount'))
                <span class="help-block">{{ $errors->first('business_types_amount') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $business_type->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.businesstypes.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
