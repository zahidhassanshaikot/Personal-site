@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">

		<div class="table-agile-info">
			      @if(Session::get('message'))
                     <br/>
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                            </div>
                        @endif
 <div class="panel panel-default">
    <div class="panel-heading">
     List of Services


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
            
            <th>Title</th>
            <th>Price</th> 
            <th data-breakpoints="xs sm md">Short Description</th>
            <th data-breakpoints="xs">Long Description</th>  
            <th data-breakpoints="xs sm md" data-title="DOB">Image</th>
            <th>Action</th> 
            
          </tr>
        </thead>
        <tbody>
          @foreach($obj_service as $service)
          <tr data-expanded="true"> 
            <td>{{ $service->title }}</td>
            <td>{{ $service->price }}</td>
            <td>{{ $service->short_description }}</td>
            <td>{{ $service->long_description }}</td> 
            <td><img src="{{ $service->image }}" alt="image" style="width: 70px;height: 50px;"></td>
            <td>
            	<a href="{{ route('edit-service',['id'=>$service->id]) }}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a>

		<a href="{{ route('delete-service',['id'=>$service->id]) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text-active"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $obj_service->links() }}
    </div>
  </div>
</div>


</section>
@endsection