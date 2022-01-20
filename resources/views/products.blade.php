@extends('structure')
@section('content')
<style>

</style>
<div class="top-p">
    <div class="category-div">
        <h2 class="category-name">{{ session('category') }}</h2>
        <div class="list">
            @foreach($products as $item)
            <a href="detail/{{$item['id']}}" class="product">
                <img alt="shoes2" src="{{$item['gallery']}}" width="200px">
                <div>
                    <h4>{{$item['name']}}</h4>
                    <p id="price">{{$item['price']}} $</p>
                    <p class="product_description">{{$item['description']}}</p>
                    <br>
                    <form action="/add_to_cart" method="POST">
                        <input type="hidden" name="product_id" value="{{$item['id']}}">
                        @csrf
                        <button class="addToCartButton" type="submit">
                            Add to cart
                        </button>
                    </form>
                </div>
            </a>
            @endforeach
        </div>
    </div>{{View::make('footer')}}
   
</div>
@endsection
