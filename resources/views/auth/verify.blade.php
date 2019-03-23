@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="box-shadow: 4px 4px 8px black ">
                    <div class="card-header" style="color: white;background-color: #222222;box-shadow: 1px 1px 5px white">{{ __('Verify Your Email Address') }}</div>
                    <img class="card-img-top" src="{{asset('images/verifyWallpaper.jpg')}}" alt="Card image cap" style="width: 100%;height: 290px;">

                    <div class="card-body">

                        <h5 class="card-title">{{__('Just one more step...')}}</h5>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="card-text">{{__('Welcome to the club. Before proceeding, please check your email for a verification link.')}}</p>
                        <p>{{ __('If you did not receive the email') }}, </p>
                        <a href="{{ route('verification.resend') }}"
                           class="btn btn-primary">{{ __('click here to request another') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
