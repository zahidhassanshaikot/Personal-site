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
                            Update About Me Info
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{ route('update-about-me')}}" method="POST" enctype="multipart/form-data">
                                	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="{{ $obj_about->title }}" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">

                                    <input type="hidden" value="{{ $obj_about->id }}" class="form-control" name="id">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Short Description</label>
                                    <input type="text" class="form-control" name="short_description" id="exampleInputPassword1" value="{{ $obj_about->short_description }}" placeholder="Short Description">
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