<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADD USER</title>
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-3"> <!-- Adjusted padding to make the form more compact -->
                                <h2 class="text-uppercase text-center mb-3">Create New User</h2>

                                <form method="POST" action="{{ route('admin-add-user-process') }}">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="nname" required />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="email" required />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                            name="uname" required />
                                        <label class="form-label" for="form3Example3cg">Username</label>
                                    </div>


                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                            name="password" oninput="validatePassword()" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" name="cofpwd"
                                            oninput="validatePassword()" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        <div id="passwordError" class="text-danger"></div>
                                        <!-- Display error message if passwords don't match -->
                                    </div>
                                    <div id="passwordError" class="text-danger"></div>
                                    <!-- Display error message if passwords don't match -->
                                    <script>
                                        function validatePassword() {
                                            var password = document.getElementById('form3Example4cg').value;
                                            var repeatPassword = document.getElementById('form3Example4cdg').value;
                                            var passwordError = document.getElementById('passwordError');
                                            var addUserButton = document.getElementById('addUserButton');

                                            // Check if passwords match
                                            if (password !== repeatPassword) {
                                                passwordError.innerHTML = 'Passwords do not match';
                                                addUserButton.disabled = true;
                                            } else {
                                                passwordError.innerHTML = ''; // Clear the error message
                                                addUserButton.disabled = false;
                                            }
                                        }
                                    </script>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                            value="Add User" id="addUserButton">
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
