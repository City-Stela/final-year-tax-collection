<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$payment->customer->name}}</title>

</head>
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
  .stamp{
    width: 150px;
    height:150px;
    padding-top: 20px;
    transform: translateY(300) translateX(120) rotate(45deg);
    border: tomato inset solid;
    border-radius: 250%;
    text-align: center;
    color: green;
  }
  .stamp .date-stamp{
      color:blue;
      justify-self: center;
      margin-top:10px;
  }
  .unverifed{
    color: red;
  }
  .up-front{
    color: crimson;
  }
</style>
<body>

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
  <div class="stamp {{$payment->status->status_value}}">
    {{$payment->status->status_value}}
  <div class="date-stamp">3/9/2019</div>
  </div>
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