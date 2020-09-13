@extends('layout.navlayout');
@section('posts')
<h1> Post '<?= $post['id'];?>' Details</h1>
<table class="table" >
<th>  <b>Post</b></th>
<th>  <b>Post Details</b></th>

<tr>
    
     <td><b> title of the post</b> </td>
    <td> <?= $post['title'];?> </td>
  
</tr>

<tr>
<td>  <b>body ot the post</b> </td> 
<td> <?= $post['body'];?> </td>
</tr>
  
<tr>
<td>  <b>created  at</b> </td> 
<td> <?= $post['created_at'];?> </td>
</tr>
<tr>
<td>  <b>updated at</b> </td> 
<td> <?= $post['updated_at'];?> </td>
<td><a href="/posts"  class=" btn btn-success"> go to posts</a>  </td>
</tr>

</table> 

@endsection
