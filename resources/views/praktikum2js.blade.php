<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Form Validation Jquery</title>
    <style>
        body {
            background-color: rgb(43, 44, 49);
            color: #ececec;
        }

        .card {
            background-color: #202124;
        }
        .error{
            color: rgb(168, 63, 63);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container d-flex justify-content-center py-5">
            <div class="card " style="width: 40rem;">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3><strong>FORM VALIDATION</strong></h3>
                    </div>
                    <div class="card-text px-3">
                        <form id="myform" method="get" action="https://ghifarymn.github.io/tugasKastemisasiJquery.github.io/">
                            <div class="row g-3">
                                <div class="form-group col-12">
                                    <label for="inpuName">Full Name</label>
                                    <input type="text" id="inputName" class="form-control" name="name">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputUsername">Username</label>
                                    <small class="form-text text-muted">6-8 characters.</small>
                                    <input type="text" id="inputUsername" class="form-control" name="uname">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email"
                                        placeholder="exp@yourmail.com">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="password"
                                        placeholder="password">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control" name="country">
                                        <option selected></option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Vietnam">Vietnam</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" name="address">
                                </div>
                                <div class="form-group col-12">
                                    <label for="inputZip">ZIP Code</label>
                                    <input type="text" class="form-control" id="inputZip" name="zip">
                                </div>

                            </div>
                            <div class="form-group col py-2">
                                <button type="submit" class="form-control btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Script-->
    <script src="script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
