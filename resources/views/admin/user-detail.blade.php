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
      <li class="active"><a href="/user-panel">USER PANEL</a></li>
      
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
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><input type="button" class="btn btn-danger" value="Delete">&nbsp;
                <input type="button" class="btn btn-success" value="Edit">
            </td>
          </tr>
          
        </tbody>
      </table>
</div>

</body>
</html>
