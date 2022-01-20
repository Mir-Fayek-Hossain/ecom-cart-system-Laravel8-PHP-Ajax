
@extends('structure')
@section('content')
<div class="top-p">
<a href="admin-insert">insert</a>
<a href="admin-update">update</a>
<a href="admin-delete">delete</a>

    <div class="category-div">
         <div class="list">
            @foreach($products as $item)
            <a href="detail/{{$item['id']}}" class="product">
                <img alt="Product image" src="{{$item['gallery']}}" width="200px">
                <div>
                    <h4>{{$item['name']}}</h4>
                    <p id="price">{{$item['price']}} $</p>
                    <p class="product_description">{{$item['description']}}</p>
                    <br>
                    <form action="admin-update" method="POST">
                        <input type="hidden" name="product_id" value="{{$item['id']}}">
                        @csrf
                        <button class="addToCartButton" type="submit">
                            Update
                        </button>
                    </form>
                    <form action="admin-delete" method="POST">
                        <input type="hidden" name="product_id" value="{{$item['id']}}">
                        @csrf
                        <button class="addToCartButton" type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection