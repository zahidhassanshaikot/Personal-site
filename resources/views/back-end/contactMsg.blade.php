@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">

		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Contact Message
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
            
            <th>Name</th>
            <th>Phone</th> 
            <th data-breakpoints="xs sm md">Email</th>
            <th data-breakpoints="xs">Message</th>  
            <th data-breakpoints="xs sm md" data-title="DOB">Send At</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($obj_contact as $contact)
          <tr data-expanded="true"> 
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone_no }}</td>
            <td>{{ $contact->email_address }}</td>
            <td>{{ $contact->message }}</td> 
            <td>{{ $contact->created_at }}</td>
            
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $obj_contact->links() }}
    </div>
  </div>
</div>


</section>
@endsection