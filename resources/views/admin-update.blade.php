
@extends('structure')
@section('content')
<form action="updating" class="bg-warning top-p" method="POST">
@csrf
 <input type="hidden" name="product_id" value="{{ session('productvalue.id') }}">
                      
  <label for="name">Name</label>
  <input type="text" name="name" value="{{ session('productvalue.name') }}" id="">

  <label for="price">Price</label>
  <input type="text" name="price" value="{{ session('productvalue.price') }}"id="">

  <label for="category1">category1</label>
  <input type="text" name="category1" value="{{ session('productvalue.category1') }}" id="">

  <label for="category2">category2</label>
  <input type="text" name="category2" value="{{ session('productvalue.category2') }}" id="">
  
  <label for="description">description</label>
  <input type="text" name="description" value="{{ session('productvalue.description') }}" id="">

  <label for="img">Select image:</label>
  <input type="file" id="img" name="img"  accept="image/*">

  <button type="submit">Add</button>
</form>
@endsection