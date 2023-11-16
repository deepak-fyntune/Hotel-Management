<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        body {
            font-family: 'Lato', sans-serif;
        }

        h1 {
            margin-bottom: 40px;
        }

        label {
            color: #333;
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px;

        }

        .card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <title>ADD FOOD</title>
</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">

            <h1>Add Food</h1>


        </div>


        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">

                        <div class = "container">
                            <form id="contact-form" role="form" method="POST" action="{{ route('food-store') }}">
                                @csrf


                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Food Name *</label>
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                    placeholder="Food Name" required="required"
                                                    data-error="Firstname is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Price *</label>
                                                <input id="form_lastname" type="number" name="surname"
                                                    class="form-control" placeholder="Add Food Price ₹ (only number)"
                                                    required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Image </label>
                                                <input id="form_email" type="file" name="image"
                                                    class="form-control" required="required">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Description *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Add Description" rows="4"
                                                        required="required" data-error="Add decription"></textarea>
                                                </div>

                                            </div>


                                            <div class="col-md-12">
                                                <br>
                                                <input type="submit"
                                                    class="btn btn-success btn-send  pt-2 btn-block
                            "
                                                    value="Add Food">

                                            </div>

                                        </div>


                                    </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>

</body>

</html>
