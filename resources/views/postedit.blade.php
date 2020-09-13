
@extends('layout.navlayout');

@section('form')
<h1>create your post</h1>
<form method="POST" action="/post/<?= $post['id'];?>/update">
@csrf
@method('post')
  <div class="form-group">
    <label for="exampleInputtitle">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputtitle"  value="<?= $post['title'];?>">
    <label  ><b>{{$errors->first('title')}}</b></label>
    
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Body</label>
    <input type="text" name="body" class="form-control" id="exampleInputBody" value="<?= $post['body'];?>">
  </div>
 
  <button type="submit" class="btn1 btn-primary">Update</button>
</form>
@endsection