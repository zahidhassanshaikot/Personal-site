@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">
   
   <div class="alert alert-secondary" role="alert">
        <h3 class= "text-center"> Update Your Profile </h3>
                  
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                

        <div class= "row">

          <div class= "col">
            <form class="Registration-form" action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
               @csrf
               
        
               <label> Enter your name: </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->name }}" type="text" name = "name" >
          

       			<label> Designation </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->designation }}" type="text" name = "designation">

               <label> Phone No </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->phone_no }}" type="text" name = "phone_no">


               <label> Short Description </label>
               <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->short_description }}" type="text" name = "short_description">

               <label> Image: </label>
               <input style= "margin-bottom:8px" class="form-control" type="file" name = "image" >
           

               <input type="submit" name="btn" class="btn btn-info btn-inline" value="Update">
          
            </form>
          </div>

        </div>


   </div> <!---alert -->


</section>
@endsection