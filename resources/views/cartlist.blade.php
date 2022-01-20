@extends('structure')
@section('content')
<style>
    .asd{
        border-bottom:2px solid black;
    }
</style>
<div class="detail-container">
    <a href="order" class="btn btn-success">Oredr Now!</a>
    @foreach($products as $item)
    <div class="asd">
       <div class="tend-item ">
           <img class="trending-image" src="{{$item->gallery}}" alt="">
           <div>
               <h6>{{$item->name}}</h6>
           </div>
       </div>
       <a href="/removecart/{{$item->cart_id}}" class="btn btn-primary">Remove</a>
    </div>
    @endforeach
</div>
@endsection
