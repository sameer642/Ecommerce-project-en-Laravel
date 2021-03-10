@extends('master')

@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Result for Products</h4>
          @foreach($products as $items)
          <div class="row searched-item cart-list-divider">
              <div class="col-sm-3">
                <a href="detail/{{ $items->id }}">
                      <img class="trending-img" src="{{ $items->gallery }}">
                    
                    </a>
              </div>

              <div class="col-sm-4">
            
                      <div class="">
                        <h3>{{ $items->name }}</h3>
                        <h5>{{ $items->description }}</h5>
              
                      </div>
                    
              </div>

              <div class="col-sm-3">
                <a href="/removecart/{{ $items->cart_id }}" class="btn btn-warning">Remove Cart</a>
              </div>
          
        </div>
          
         @endforeach
        </div>

  </div>


</div>
@endsection
