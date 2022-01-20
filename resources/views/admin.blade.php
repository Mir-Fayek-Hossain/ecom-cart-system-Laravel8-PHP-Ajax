@extends('structure')
@section('content')
<div class="top-p bg-warning">
    <div class="center-container ">
        <a href="/" class="e-name ">
            <h2>ADMIN PANEL</h2>
        </a>
    </div>
    <div class="center-container ">
        <div class="main-form-container  bg-light">
            <h3>Login</h3>
            <form class="formContainer " action=/admin method="POST">
                @csrf
                <div class="inputBox">
                    <input class="sigUname" type="name" name="name" required="required">
                    <p>User Name</p>
                </div>
                <div class="inputBox">
                    <input class="sigUpass" type="password" name="password" required="required">
                    <p>Password</p>
                </div>
                <div class="warning">
                    @if (session('warning'))
                    {{ session('warning') }}
                    @endif
                </div>
                <div class="inputBox">
                    <button type="submit" class="btn btn-warning">Login</button>
                </div>
            </form>
        </div>
    </div>
    </div>
{{View::make('footer')}}
@endsection
