@extends('layout.master')
@section('title','Create Product')

@section('content')

@if(session('status'))
<p class="alert alert-success">{{session('status')}}</p>
@endif
<form  method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price">
  </div>
  <div class="form-group">
  <label for="description">Description</label>
  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
</div>
  File input<input type="file" class="form-control" id="file" name="file[]" multiple>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection