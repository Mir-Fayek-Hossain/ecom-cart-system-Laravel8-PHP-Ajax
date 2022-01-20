 @extends('structure')
@section('content')
<style>
    .asd{
        border-bottom:2px solid black;
    }
</style>
<div class="detail-container">
     <table class="table table-dark">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>{{$total}} taka</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Delevery</td>
      <td>60 taka</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Total Amount</td>
      <td>{{$total+10}}</td>
    </tr>
  </tbody>
</table>
<h3>Which Payment mathode would you like? </h3>
<form action="/orderplace" method="POST">
@csrf
  <div class="form-group">
    <input type="radio" value="bkash" name="payment"> <span>Bkash</span><br>
    <input type="radio" value="on delevery" name="payment"> <span>Payment On Delevery</span><br>
    <input type="radio" value="via card" name="payment"> <span>Credit card</span><br>
  </div>
  <div class="form-group">
    <label >Your address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >Your number</label>
    <input type="text" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number">
  </div>
  <button type="submit" class="btn btn-primary">Place Order</button>
</form>
</div>
@endsection
