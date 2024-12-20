@extends('layouts.app')

@section('content')
<div class="block-container" style="width:80%;margin-left:10%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                    <br>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        {{  __('Thanks for signing up! Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email, we will gladly to sent you another') }}
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            <br>
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
