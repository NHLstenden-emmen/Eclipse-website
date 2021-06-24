@extends('includes.app')

@section('content')    
    @include('includes\wave')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="margin-top: 50%;">
                        <a href="/" class="singInUpLogo">
                            <img src="img/logo/bigLogo.png" alt="Eclipse Logo">
                        </a>
                        <div class="card-body">
                            <div style="text-align: center;" class="logoutbutton">
                                <p>your account works Download
                                    <a href=""> here the app.</a>
                                </p>
                                <img src="img/qrcode.png" class="qrcode" alt="QR code for the app">
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <a class="specialButton" href="{{ route('signout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection