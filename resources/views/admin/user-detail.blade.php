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
      <li ><a href="#">Home</a></li>
      <li><a href="#">FOOD PANEL</a></li>
      <li><a href="#">ORDER</a></li>
      <li class="active"><a href="/detail-check">USER PANEL</a></li>

    </ul>
  </div>
</nav>

<div class="container">
    <a href="admin-add-user" class="btn btn-primary">Add User</a>
<br>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>


            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <td>
                <form action="{{ route('users-destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <form action="{{ route('users-update', $user->id) }}">
                    @csrf
                    @method('')
                <input type="button" class="btn btn-success" value="Edit">

            </form></td>

          </tr>
          @endforeach

        </tbody>
      </table>

      <div>
        <!-- resources/views/home/index.blade.php -->




</body>
</html>
