<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$payment->customer->name}}</title>

</head>
{{-- <style>
 h1{
   color: blue;
   text-align: center
 }
 table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}
</style> --}}

<style>
  @page{
    margin:0;
  }
  body{
    margin:0;
  }
  *{
    font-family: Verdana, Arial, sans-serif
  }
  a{
    color:#fff;
    text-decoration: none;
  }
  table{
    font-size:x-small;
  }
  tfoot tr td{
    font-weight: bold;
    font-size:x-small;
  }
  .invoice table{
    margin:15px;
  }
  .invoice h3{
    margin-left: 15px;
  }
  .information{
    background-color: #60A7A6;
    color: #fff;
  }
  .information .logo{
    padding: 10px;
  }
  .information table{
    padding: 10px;
  }
</style>
<body>

{{-- <h1>{{$customer->name}} Details</h1>
<table class="table table-striped table-info">
  <thead>
    <tr>

      <th colspan="3" style="text-align:left;">Name</th>
      <th colspan="3" style="text-align:right;">Amount</th>

    </tr>
  </thead>
  <tbody>404-error
      <tr>
        <td colspan="3" style="text-align:left;">{{ $customer->name }}</td>
        <td colspan="3" style="text-align:right;">{{ 'UGX '.$customer->amount }}</td>
      </tr>
  </tbody>
</table> --}}

<div class="information">
  <table width="100%">
    <tr>
      <td align="left" style="width:40%;">
        <h3>{{$payment->customer->name}}</h3>
        <pre>
          Street 15
          12345 City
          United Kingdom
          <br/><br/>
          Date:{{date('d/M/Y')}}
          Identifier: {{$payment->payment_token}}
          Status:Paid
        </pre>
      </td>
      <td align="center">
        <img src="" alt="Logo" width="64px" class="logo"/>
      </td>
      <td align="right" style="width:40%;">
        <h3>{{ $payment->customer->name}}</h3>
        <pre>
          https://companyname

          Street 26
          123456 City
          United Kingdom
        </pre>
      </td>
    </tr>
  </table>
</div>
<br/>
<div class="invoice">
  <h3>Token {{$payment->payment_token}}</h3>
  <table width="100%">
    <thead>
      <tr>
        <th>Business Name</th>
        <th>Paid</th>
        <th>Date</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$payment->customer->name}}</td>
        <td align="left">{{ 'UGX '.$payment->customer->businessTypes->business_types_amount }}</td>
        <td align="left">{{ $payment->updated_at }}</td>
        <td align="left">{{ 'UGX '.$payment->customer->businessTypes->business_types_amount }}</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="1"></td>
      <td colspan="1"></td>
      <td align="left">Total</td>
      <td align="left" class="gray">{{ 'UGX '.$payment->customer->businessTypes->business_types_amount }}</td>
    </tr>
</tfoot>    
  </table>
</div>
<div class="information" style="position:absolute;bottom:0;">
  <table width="100%">
    <tr>
      <td align="right" style="width:50%;">
        &copy; {{date('Y')}} {{config('app.url')}} - All rights reserved.
      </td>
      <td align="right" style="width:50%;">
        Company slogan
      </td>
    </tr>
  </table>
</div>
</body>
</html>