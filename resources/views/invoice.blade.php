<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/static/css/app.css">
</head>
<body>
<div class="container">
  <div class="row">
    <h1>Customer List</h1>

<div class="col-md-12">
<a class="btn btn-outline-info m-2" href="{{ URL::to('/customers/pdf') }}">Export PDF</a>
<table class="table table-warning table-striped text-left table-bordered">
  <thead>
    <tr>
      <th style="width:50px">#</th>
      <th>Name</th>
      <th>Amount</th>
      <th style="text-align: right;width:92px">Action</th>
    </tr>
  </thead>
  <tbody>
      @if ( count($data)<1)
        <tr>
          <td colspan="3" class="text-center">No Customer</td>
        </tr>
      @else
  
      @foreach($data as $customer)
      <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ 'UGX '.$customer->amount }}</td>
        <td>
        <a class="btn btn-warning btn-xs" href="{{ url('customer/pdfexports/' . $customer->id)}}" target="blank">PDF EXPORT</a>
        </td>
       
      </tr>
    @endforeach
          
      @endif
      </tbody>
</table>
</div>
</div>
</div>
<script src="/static/js/app.js"></script>
<script src="/static/js/jquery.min.js"></script>
</body>
</html>