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
                            </div>
                            <div class="visible-print text-center">
                                <h1> Or scann the qr code to download the apk </h1>
                                
                                {!! QrCode::size(250)->generate('github.com/nhlstenden-emmen'); !!}
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