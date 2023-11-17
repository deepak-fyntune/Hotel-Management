<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>UPDATE USER</title>
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-3">
                                <h2 class="text-uppercase text-center mb-3">Update Existing User</h2>
                                <form method="GET" action="{{ route('user-update-process', [$user->id]) }}">
                                    @csrf

                                    <div class="form-outline mb-3">
                                        <input type="text" id="form3Example1cg"
                                            class="form-control form-control-lg" name="nname" required
                                            value="{{ $user->name }}" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="email" id="form3Example3cg"
                                            class="form-control form-control-lg" name="email" required
                                            value="{{ $user->email }}" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    {{-- <div class="form-outline mb-3">
                                        <input type="hidden" id="myInput"
                                            class="form-control form-control-lg" name="password"
                                            value="{{ $user->password }}" required />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="showPassword" onclick="myFunction()">
                                        <label class="form-check-label" for="showPassword">Show Password</label>
                                    </div> --}}

                                    <div id="passwordError" class="text-danger"></div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
