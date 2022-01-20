@extends('structure')
@section('content')
<!-- <div class="detail-container">
        <div class="col-sm-6">
           <img class="detail-image" src="" alt="">
        </div>
        <div class="Product-image-container">
            <a href="/">Go back</a>  
            <h2>{{$product['name']}}</h2>
            <h3>Price : </h3>
            <h4>detail : </h4>
            <h4>Category : </h4>
            <br><br>
            <button class="btn btn-warning" type="submit">Add to cart</button>
            <br><br>
            <button class="btn btn-primary" type="submit">Buy Now</button>
            <br><br>
    </div>
</div> -->

<style>
    .detail-container {
        display: flex;
    }

    .Product-image-container {

        display: flex;
        justify-content: center;
        width: 50%;
    }

    .image {
        max-width: 300px;
        margin: 25px;
    }

    .image img {
        max-width: 100%;
    }

    .loupe {
        display: none;
        position: absolute;
        width: 100px;
        height: 100px;
        border: 1px solid black;
        box-shadow: 5px 5px 12px black;
        background: rgba(0, 0, 0, 0.25);
        cursor: crosshair;
        overflow: hidden;
    }

    .loupe img {
        position: absolute;
        right: 0;
    }

    .Product-Detail-Container {
        width: 80%;
    }

    /* Media */
    @media only screen and (max-width: 767px) {
        .Product-image-container {
            width: 100%;
        }

        .detail-container {
            display: block;
        }
    }

</style>
<div class="detail-container">
    <div class="Product-image-container ">
        <div class="image">
            <img src="{{$product['gallery']}}">
        </div>
        <div class="loupe"></div>
    </div>

    <div class="Product-image-container">
        <div class="Product-Detail-Container"> <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>detail : {{$product['description']}} </h4>
            <h4>Category :{{$product['category2']}} </h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-warning" type="submit">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary" type="submit">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
<div class="list">
    <h2>Related Products</h2>
            @foreach($related as $item)
            <a href="/detail/{{$item['id']}}" class="product">
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
        {{View::make('footer')}}
<script>
    // Deatils page Image Magnifier 
    var $loupe = $(".loupe"),
        loupeWidth = $loupe.width(),
        loupeHeight = $loupe.height();

    $(document).on("mouseenter", ".image", function (e) {
        var $currImage = $(this),
            $img = $('<img/>')
            .attr('src', $('img', this).attr("src"))
            .css({
                'width': $currImage.width() * 2,
                'height': $currImage.height() * 2
            });

        $loupe.html($img).fadeIn(100);

        $(document).on("mousemove", moveHandler);

        function moveHandler(e) {
            var imageOffset = $currImage.offset(),
                fx = imageOffset.left - loupeWidth / 2,
                fy = imageOffset.top - loupeHeight / 2,
                fh = imageOffset.top + $currImage.height() + loupeHeight / 2,
                fw = imageOffset.left + $currImage.width() + loupeWidth / 2;

            $loupe.css({
                'left': e.pageX - 75,
                'top': e.pageY - 75
            });

            var loupeOffset = $loupe.offset(),
                lx = loupeOffset.left,
                ly = loupeOffset.top,
                lw = lx + loupeWidth,
                lh = ly + loupeHeight,
                bigy = (ly - loupeHeight / 4 - fy) * 2,
                bigx = (lx - loupeWidth / 4 - fx) * 2;

            $img.css({
                'left': -bigx,
                'top': -bigy
            });

            if (lx < fx || lh > fh || ly < fy || lw > fw) {
                $img.remove();
                $(document).off("mousemove", moveHandler);
                $loupe.fadeOut(100);
            }
        }
    });

</script>
@endsection
