<h1>Customer List</h1>
<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
    @if ( count($data) < 1)
      <tr>
        <td colspan="3" class="text-center">No Customer</td>
      </tr>
    @else

    @foreach($data as $customer)
    <tr>
      <td>{{ $customer->id }}</td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->amount }}</td>
     
    </tr>
  @endforeach
        
    @endif
    </tbody>
  </table>
</table>