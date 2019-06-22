<table class="table table-warning table-striped text-left table-bordered">
    <thead>
      <tr>
          <th width="98">Action</th>
          <th style="width:50px">#</th>
          <th>Name</th>
          <th>Business Type</th>
          <th>Business Type Amount</th>
          <th>Payment Method</th>
          <th>Payment Token</th>
          <th>Status</th>
          <th>Payment Date</th>
          <th style="text-align: right;width:92px">Print</th>
      </tr>
    </thead>
    <tbody>
        @if ( count($payments)<1)
          <tr>
            <td colspan="3" class="text-center">No Payment</td>
          </tr>
        @else
    
        @foreach($payments as $payment)
        <tr>
          <td>
              {!! Form::open(['method' => 'DELETE', 'route' => ['backend.managepayments.destroy', $payment->id]]) !!}
                  <a href="{{ route('backend.managepayments.edit', $payment->id) }}" class="btn btn-xs btn-default">
                      <i class="fa fa-edit"></i>
                  </a>
                  @if($payment->id == config('cms.default_payment_method_id'))
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
          <td>{{ $payment->id }}</td>
          <td>{{ $payment->customer->name }}</td>
          <td>{{ $payment->customer->businessTypes->business_types_name }}</td>
          <td>{{ $payment->customer->businessTypes->business_types_amount }}</td>
          <td>{{ $payment->paymentMethod->payment_method_name }}</td>
          <td>{{ $payment->payment_token }}</td>
          <td>{{$payment->status->status_value}}</td>
          <td>{{ $payment->updated_at }}</td>
          <td>
          <a class="btn btn-warning btn-xs" href="{{ url('customer/pdfexports/' . $payment->id)}}" target="blank">PDF EXPORT</a>
          </td>
         
        </tr>
      @endforeach
     
        @endif
        </tbody>
  </table>
