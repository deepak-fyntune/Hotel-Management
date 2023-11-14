Hello, Welcome to Admin Panel.
<br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" /> <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <title>ADMIN LOGIN</title>
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('admin_login') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Admin E-Mail</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                aria-describedby="emailHelp" placeholder="Enter email">
        </div><br>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                placeholder="Password">
        </div>
        <br>
        <input type="submit" class="btn btn-primary">
    </form>
</body>

</html>
