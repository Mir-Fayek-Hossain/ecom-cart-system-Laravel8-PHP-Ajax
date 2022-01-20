@extends('structure')
@section('content')
<style>
    .asd{
        border-bottom:2px solid black;
    }
</style>
<div class="detail-container">
    <a href="order" class="btn btn-success">My Oredrs</a>
    @foreach($orders as $item)
    <div class="asd">
       <div class="tend-item ">
           <img class="trending-image" src="{{$item->gallery}}" alt="">
           <div>
               <h6>name:{{$item->name}}</h6>
               <h6>Delivery status:{{$item->status}}</h6>
               <h6>Addres:{{$item->address}}</h6>
               <h6>Payment Status:{{$item->payment_status}}</h6>
               <h6>Payment method:{{$item->payment_method}}</h6>
           </div>
       </div>
    </div>
    @endforeach
</div>
@endsection
