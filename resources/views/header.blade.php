<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartitem();


}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">E-Comm</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Orders</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/cartlist">Cart({{ $total }})</a></li>
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
          
        </ul>
      </li>
      @else
      <li><a href="/login">Login </a></li>

      @endif
    </ul>
    
    <form action="/search" class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
  </div>
</nav>


