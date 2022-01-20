@extends('structure')
@section('content')
<style>
    .profile {
        margin: 0px 40px 0px 40px;
        max-width: 500px;
    }

    .profile>div>input {
        width: 100%;

    }

    .profile-sub-div {
        margin-bottom: 50px
    }

    .profile-input {
        border: none;
        outline: none;
        width: 100%;
        padding: 12px;
        resize: vertical;
        height: 50px
    }
</style>
<div class="top-p ">
    <form action="/update" method="POST" class="profile profile-sub-div">
        @csrf
        <h2>Your Profile</h2>
        <div class="profile-sub-div">
            Name :
            <textarea class="border-bottom border-warning rounded-3 profile-input"
                name="name">{{ session('user.name') }}</textarea>
        </div>
        <div class="profile-sub-div">
            Phone Number :
            @if (session('user.number'))
            <textarea class="border-bottom border-warning rounded-3 profile-input"
                name="number">{{ session('user.number') }}</textarea>
            @endif
            @if (!session('user.number'))
            <textarea class="border-bottom border-warning rounded-3 profile-input"
                placeholder="Enter Your Phone Nmber Here" name="number"></textarea>
            @endif
        </div>
        <div class="profile-sub-div border-bottom border-warning rounded-3 ">
            <label for="cars">Gender : </label>
            <select id="cars" name="cars">
                <option value="volvo">None</option>
                <option value="saab">Male</option>
                <option value="fiat">Female</option>
                <option value="audi">Others</option>
            </select>
        </div>
        <div>
            Address :
            @if (session('user.address'))
            <textarea class="border-bottom border-warning rounded-3 profile-input"
                name="address">{{ session('user.address') }}</textarea>
            @endif
            @if (!session('user.address'))
            <textarea class="border-bottom border-warning rounded-3 profile-input" placeholder="Enter Your Address Here"
                name="address"></textarea>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="foot bg-warning">
        <p>© 2021 Copyright : <a class="text-reset fw-bold" href="/">www.sodai.com</a></p>
    </div>
</div>
@endsection
