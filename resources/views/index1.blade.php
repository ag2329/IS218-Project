<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>My first styled page</title>
</head>

<body>

<!-- Site navigation menu -->

<div class="container">
  <form  method="POST" action="{{route('thanks')}}">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Enter Name..">

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>