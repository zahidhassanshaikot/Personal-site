@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">

		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Payment
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            
            <th>Id</th>
            <th data-breakpoints="xs">Service Id</th>
            <th data-breakpoints="xs">Transction Id</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Payment time</th>
        
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            
           @foreach($payments as $payment)
            <td>{{$payment->id}}</td>
            <td>{{ $payment->service_id }}</td>
            <td>{{ $payment->trxId }}</td>
            <td>{{ $payment->created_at }}</td>
            @endforeach
            
          </tr>

        </tbody>
      </table>
    </div>
    {{ $payments->links() }}
  </div>
</div>


</section>
@endsection