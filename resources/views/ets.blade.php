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
            background: url('kardus.jpg');
            background-size: cover;
            height: 100vh;
            background-repeat: none;
            width: 100%;
        }
        .error {
            color: rgb(168, 63, 63);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container d-flex justify-content-center py-5">

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <div class="row text-start py-2">
                        <p style="margin: 0; ">Nama : Ghifary Muhammad N</p>
                        <p style="margin: 0; ">panggilan : Ghifary</p>
                        <p style="margin: 0; ">NRP : 5026201156</p>
                    </div>
                    <div class="card-title text-center py-4">
                        <h3><strong>Form Input Data Barang</strong></h3>
                    </div>
                    <div class="card-text px-3">
                        <form class="form-inline" id="myform" method="get"
                            action="https://www.jne.co.id/id/tracking/trace">
                            <div class="form-group row py-2">
                                <div class="col-4">
                                    <label for="inpuName">Nama Barang</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="inputName" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <div class="col-4">
                                    <label for="inputHarga">Harga</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" id="inputHarga" class="form-control" placeholder="contoh: 50000"
                                        name="harga">
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <div class="col-4">
                                    <label for="inputState">Jenis Barang</label>
                                </div>
                                <div class="col-8">
                                    <select id="inputState" class="form-control" name="jenis">
                                        <option selected></option>
                                        <option value="Indonesia">Makanan</option>
                                        <option value="Malaysia">Minuman</option>
                                        <option value="Singapura">Non Makanan-Minuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <div class="col-4">
                                    <label for="inputZip">Kode Barcode</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="inputZip" name="barcode">
                                </div>
                            </div>

                            <div class="row py-3">
                                <div class="form-group col">
                                    <button type="submit" value="submit"
                                        class="form-control btn btn-success">Kirim</button>
                                </div>
                                <div class="form-group col">
                                    <button type="reset" value="reset"
                                        class="form-control btn btn-primary">Reset</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!--Script-->
    <script src="scriptku.js"></script>
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
