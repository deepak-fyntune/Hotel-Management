<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FOODORDER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="food-panel">FOOD PANEL</a></li>
      <li><a href="#">ORDER</a></li>
      <li><a href="/detail-check">USER PANEL</a></li>

    </ul>
  </div>
</nav>
<div class="container">
    <a href="/food-create" class="btn btn-primary">Add New Food</a>
<br><br>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Food Name</th>
        <th scope="col">Food Price</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>

      <tr>


        <th scope="row">Food Name</th>
        <td>Food Price</td>
        <td>Description</td>
        <td>Image</td>



        <td>
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form><br>
            <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-success">&nbsp;&nbsp;Edit&nbsp;&nbsp;</button>
            </form>
            </td>

      </tr>

    </tbody>
  </table>

</body>
</html>
