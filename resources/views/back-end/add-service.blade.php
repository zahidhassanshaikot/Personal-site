@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">



	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Service
                        </header>

                     @if ($errors->any())
                     <br/>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                     @if(Session::get('message'))
                     <br/>
                            <div class="alert alert-success" id="message">
                                <h3 class=" text-center text-success"> {{ Session::get('message') }}</h3>
                            </div>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{ route('save-new-service')}}" method="POST" enctype="multipart/form-data">
                                	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title" required> 
                                </div>

                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Price" required> 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Short Description</label>
                                    <input type="text" class="form-control" name="short_description" id="exampleInputPassword1" placeholder="Short Description" required>
                                </div>

                                       <div class="form-group">
                                    <label for="exampleInputPassword1">Long Description</label>
                                    <textarea type="text" class="form-control" name="long_description" placeholder="Long Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" name="image" id="exampleInputFile">
                                    <p class="help-block">Image should be less then 2MB.</p>
                                </div>
                       
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
            </div>


</section>
@endsection