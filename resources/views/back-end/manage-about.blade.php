@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">

		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     About Me
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
            <th data-breakpoints="xs">Short Description</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            
           
            <td>{{ $obj_about->title }}</td>
            <td>{{ $obj_about->short_description }}</td>
            
            <td><img src="{{ $obj_about->image }}" alt="image" style="width: 70px;height: 50px;"></td>
            <td><a href="{{ route('edit-about-me',['id'=>$obj_about->id]) }}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>


</section>
@endsection