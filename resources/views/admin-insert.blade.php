
@extends('structure')
@section('content')
<form action="admin-insert" class="bg-warning top-p" method="POST">
@csrf
  <label for="name">Name</label>
  <input type="text" name="name" id="">

  <label for="price">Price</label>
  <input type="text" name="price" id="">

  <label for="category1">category1</label>
  <input type="text" name="category1" id="">

  <label for="category2">category2</label>
  <input type="text" name="category2" id="">
  
  <label for="description">description</label>
  <input type="text" name="description" id="">

  <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*">

  <button type="submit">Add</button>
</form>
@endsection