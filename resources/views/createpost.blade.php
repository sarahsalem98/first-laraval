
@extends('layout.navlayout');

@section('form')
<h1>create your post</h1>
<form method="POST" action="/submitpost">
@csrf
@method('post')
  <div class="form-group">
    <label for="exampleInputtitle">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputtitle" >
    <label  ><b>{{$errors->first('title')}}</b></label>
    
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Body</label>
    <input type="text" name="body" class="form-control" id="exampleInputBody">
    <label  ><b>{{$errors->first('body')}}</b></label>
  </div>
 
  <button type="submit" class="btn1 btn-primary">Submit</button>
</form>
@endsection