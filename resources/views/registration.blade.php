@extends('structure')
@section('content')
<div class="top-p bg-warning  ">
    <div class="center-container ">
        <a href="/" class="e-name ">
            <h2>SODAI.com</h2>
        </a>
    </div>
    <div class="center-container ">
        <div class="main-form-container  bg-light">
            <h3>Sign up</h3>
            <form class="formContainer" action=/registration method="POST">
                @csrf
                <div class="inputBox">
                    <input class="sigUname" type="email" name="email" value="{{ session('b') }}" required="required">
                    <p>User Name</p>
                </div>
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
                    <button type="submit" class="btn btn-warning">Register</button>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-4 center-container"> <p>Already have an account? <a style="color:black;" href="/login">Login</a></p></div>
           
</div>
{{View::make('footer')}}
@endsection
