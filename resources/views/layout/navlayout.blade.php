<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <img src="/image/computer-icons-directory-macos-temporary-folder-folder.jpg" alt="Cover Image"> -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" >
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <script src="./public/js/main.js"></script> -->
    <title>Document</title>
</head>
<body>
<div class="a1">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="http://127.0.0.1:8000/home">My Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="http://127.0.0.1:8000/posts">posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="http://127.0.0.1:8000/createpost">create post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1:8000/contactus">contact us</a>
  </li>
 
</ul>
</div>
<!-- <script>

// var header = document.getElementsByClassName("nav-item");
var btns = document.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("on click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script> -->
@yield('title')
@yield('table')
@yield('contacts')
@yield('form')
@yield('posts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>