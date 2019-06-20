<table class="table table-warning table-striped text-left table-bordered">
    <thead>
      <tr>
          <th width="98">Action</th>
        <th style="width:50px">#</th>
        <th>Name</th>
        <th>Business Type</th>
        <th>Business Type Amount</th>
        <th>Created At</th>
        <th style="text-align: right;width:92px">Print</th>
      </tr>
    </thead>
    <tbody>
        @if ( count($customers)<1)
          <tr>
            <td colspan="3" class="text-center">No Customer</td>
          </tr>
        @else
    
        @foreach($customers as $customer)
        <tr>
          <td>
              {!! Form::open(['method' => 'DELETE', 'route' => ['backend.managecustomers.destroy', $customer->id]]) !!}
                  <a href="{{ route('backend.managecustomers.edit', $customer->id) }}" class="btn btn-xs btn-default">
                      <i class="fa fa-edit"></i>
                  </a>
                  @if($customer->id == config('cms.default_payment_method_id'))
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
          <td>{{ $customer->id}}</td>
          <td>{{ $customer->name }}</td>
          <td>{{$customer->businessTypes->business_types_name}}</td>
          <td>{{$customer->businessTypes->business_types_amount}}</td>
          <td>{{ $customer->updated_at }}</td>
          <td>
          <a class="btn btn-warning btn-xs" href="{{ url('customer/pdfexports/' . $customer->id)}}" target="blank">PDF EXPORT</a>
          </td>
         
        </tr>
      @endforeach
     
        @endif
        </tbody>
  </table>
