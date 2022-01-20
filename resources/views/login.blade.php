@extends('structure')
@section('content')
<div class="top-p bg-warning">

    <div class="center-container ">
        <a href="/" class="e-name ">
            <h2>SODAI.com</h2>
        </a>
    </div>
    <div class="center-container ">
        <div class="main-form-container  bg-light">
            <h3>Login</h3>
            <form class=" formContainer " action=/login method="POST">
                @csrf
                <div class="inputBox">
                    <input class="sigUname" type="email" name="email" required="required">
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
       <div class="pt-4 center-container"> <p>Dont have an account? <a style="color:black;" href="/registration">Sign up</a></p></div>
        
</div>
{{View::make('footer')}}
@endsection
