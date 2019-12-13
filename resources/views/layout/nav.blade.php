<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}">ShopKeeper</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
      
      <li><a href="#">Brand</a></li>
      <li><a href="#">Chart
      @if(session('items'))
      {{count(session('items'))}}
      @endif
      </a></li>
      <li>
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Product
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{url('product/create')}}">Create</a></li>
    <li><a href="#">View All Product</a></li>
    <li><a href="#">Edit</a></li>
  </ul>
</div>
      </li>


      <li>
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Login</a></li>
    <li><a href="#">Logout</a></li>
    <li><a href="#">Register</a></li>
  </ul>
</div>
      </li>
    </ul>
  </div>
</nav>


