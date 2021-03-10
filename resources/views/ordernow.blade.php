@extends('master')

@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <table class="table">
        <tbody>
          <tr>
            <td>Amount</td>
            <td>{{ $total }}</td>
            
          </tr>
          <tr>
            <td>tax</td>
            <td>$ 0</td>
            
          </tr>
          <tr>
            <td>Delivery</td>
            <td>$ 10</td>
            
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>{{ $total + 10 }}</td>
            
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="post">
            @csrf
            <div class="form-group">
              
              <textarea type="text" name="address" placeholder="Enter your Address" class="form-control" ></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Payment Method</label><br><br>
              <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>Emi Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>Payment On delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
          </form>
      </div>
   

  </div>


</div>
@endsection
