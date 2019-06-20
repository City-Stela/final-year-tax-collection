<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Business Type Name</td>
            <td>Business Type Amount</td>
            <td width="120">Customer Count</td>
        </tr>
    </thead>
    <tbody>
        @foreach($business_types as $business_type)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.businesstypes.destroy', $business_type->id]]) !!}
                        <a href="{{ route('backend.businesstypes.edit', $business_type->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        @if($business_type->id == config('cms.default_business_type_id'))
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
                <td>{{ $business_type->business_types_name }}</td>
                <td>{{ 'UGX '.$business_type->business_types_amount }}</td>
                <td>{{ $business_type->customer->count() }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
