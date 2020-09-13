@extends('layout.navlayout');
@section('posts')
<h1> posts</h1>
<table class="table" >
<th> post title</th>
<th> post body</th>

<tr>
    @foreach($posts as $post)
    <td> <?= $post['title'];?> </td>
    <td> <?= $post['body'];?> </td>
    <td> <a href="/post/<?= $post['id'];?>/show"  class=" btn btn-success"> show</a> </td>
    <td>  <a href="/post/<?= $post['id'];?>/edit" class="btn btn-warning"> Edit</a></td>
    <td><a href="/post/<?= $post['id'];?>/delete" class="btn btn-danger">Delete</a> </td>

</tr>
@endforeach
</table> 
@endsection