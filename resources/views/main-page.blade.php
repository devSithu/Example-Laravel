

@extends('layout.master')
@section('title','Welcome Page')

@section('content')
<div class="container">
    <div class="col-md-4">
        <!-- sideBar -->
       @include('layout.sideBar')
        <!-- close sideBar -->
    </div>
   @foreach($products as $product)
   <div class="col-sm-6 col-md-4">
    <div class="container" >

        <div class="card" style="width:400px">
           
            <img class="card-img-top" src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="Card image" style="width:150px">
           
          
          <div class="card-body">
            <h4 class="card-title">{{$product->title}}</h4>
            <h4>{{$product->price}}</h4>
            <h4>{{$product->description}}</h4>
            <a href="#" class="btn btn-primary stretched-link">View Detail</a>
            <a href="{{action('pageController@add',$product->id)}}" class="btn btn-primary stretched-link">Add to chart</a>
          </div>
        </div>
      </div>
    
</div>
   @endforeach
</div>

