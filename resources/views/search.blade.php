@extends('master')

@section('content')
<div class="custom-product">
  <div class="col-sm-4">
      <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
    <div class="trending-wrapper">
        <h4>Result for Products</h4>
        <div class="">
          @foreach($products as $items)
          <a href="detail/{{ $items['id'] }}">
          <div class="searched-item">
            <img class="trending-img" src="{{ $items['gallery'] }}">
            <div class="">
              <h3>{{ $items['name'] }}</h3>
              <h5>{{ $items['description'] }}</h5>
    
            </div>
          </a>
          </div>
         @endforeach
        </div>

  </div>


</div>
@endsection
