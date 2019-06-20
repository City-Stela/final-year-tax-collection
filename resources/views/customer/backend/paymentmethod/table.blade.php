<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Payments Name</td>
            <td width="120">Payments Count</td>
        </tr>
    </thead>
    <tbody>
        @foreach($payment_methods as $payment_method)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.paymentmethods.destroy', $payment_method->id]]) !!}
                        <a href="{{ route('backend.paymentmethods.edit', $payment_method->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($payment_method->id == config('cms.default_payment_method_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>{{ $payment_method->payment_method_name }}</td>
                <td>{{ $payment_method->payments->count() }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
