<?php
use App\Http\Controllers\ProductController;
$total=0;
if(session()->has('user')){

  $total = ProductController::cartItem();
}
?>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">Oders</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart{{$total}}</a>
        </li>
        <!-- <a href="/logout">Logout</a>
        <br> -->

        @if(Session::has('user'))
        <li class="nav-item">
          <a class="btn btn-danger" aria-current="page" href="/logout">Logout</a>
        </li>
 
          <!-- <li><a href="/logout">Logout</a></li> -->
      @else

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/register">Register</a>
        </li>

      <!-- <li><a  href="/login">Login</a></li>
      <a  href="/register">Register</a> -->


      @endif
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        

    </div>
  </div>
</nav>