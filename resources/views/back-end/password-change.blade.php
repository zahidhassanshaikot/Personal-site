@extends('back-end.master')
@section('content')

<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
   <section class="card">
                    <div class="card-header">
                        {{--                        <h3 class="center">{{$role->name}}</h3>--}}
                        <h3 class="center">Profile</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-password') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                <div class="col-md-6">
                                    <input id="old_password" type="password"
                                           class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password"
                                           value="{{ old('old_password') }}" required>
                                    @if(Session::get('message'))
                                    <strong class="text-center text-danger" id="message"> {{ Session::get('message') }}</strong>
                                    @endif
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" title="Must contain at least one number and one uppercase and lowercase letter,spacial character and at least 6 or more characters" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                    <span class="text-danger">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-4 ">
                                   

                                </div>    <div class="col-md-6 ">
                                    <input type="submit" value="Update Password" name="btn" class="btn btn-info btn-block"/>

                                </div>
                            </div>
                        </form>
                    </div>
                </section>

     
</section>
@endsection