<script type="text/javascript">

    Function validasi(form) {

        Var ceknama = form.nama.value;

        Var cekemail = form.email.value;

        Var cekkomen = form.komentar.value;

        If (ceknama == 0) {

            Alert("Periksa kembali nama anda!");

            Form.nama.focus();

            Return (false);

        }

        If (cekemail == 0 || cekemail.indexOf("@", 1) == -1) {

            Alert("Periksa kembali email anda!");

            Form.email.focus();

            Return (false);

        }

        If (cekkomen == 0) {

            Alert("Periksa kembali komentar anda!");

            Form.komentar.focus();

            Return (false);

        }

        Return (true);

    }

</script>



<!DOCTYPE html>

<html>



<head>

<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>

    <title>Buku Tamu</title>

    <style>

       .center-wrapper {

            Min-height: 100vh;

            Display: flex;

            Justify-content: center;

            Align-items: center;

        }

        Body {

            Background-color:rgb(25, 224, 75); 

            Height: 100vh;

            Margin: 0;

            Display: flex;

            Justify-content: center;

            Align-items: center;

            Font-family: Arial, sans-serif;

        }

        .container {

            Background-color: white;

            Padding: 20px;

            Border-radius: 10px;

            Box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            Max-width: 1000px; 

            Width: 100%; 

            Text-align: center;

        }

        .bgform h3{

            Font-size: 60px;

            Font-family:Arial, Helvetica, sans-serif;

            Text-align: center;

        }

        .form-buttons button,

        .form-buttons a {

            Padding: 10px 20px;

            Border-radius: 5px;

            Color: white;

            Text-decoration: none;

            Font-size: 16px;

            Text-align: center;

        }



        .btn-success {

            Background-color:rgb(0, 26, 255);
            Border: none;

        }



        .btn-danger {

            Background-color:rgb(0, 26, 255);

            Border: none;

        }



        .btn-info {

            Background-color: #17a2b8;

            Border: none;

        }



           </style>

</head>

<body>

<div class="center-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6"></div>

            <div class="bgform" align="center">

                <h3><b>BUKU TAMU</b></h3>

                <div style="width: 900px;">

                    <hr>

                    <div style="width: 700px;" align="left">

                        <form role="form" method="post" onsubmit="return validasi(this)">

                            <div class="form-group row">

                                <label class="col-sm-3 col-form-label">Nama</label>

                                <div class="col-sm-9">

                                    <input type="text" name="nama" class="form-control">

                                </div>

                            </div>

                            <div class="form-group row">

                                <label class="col-sm-3 col-form-label">Email</label>

                                <div class="col-sm-9">

                                    <input type="text" name="email" class="form-control">

                                </div>

                            </div>

                            <div class="form-group row">

                                <label class="col-sm-3 col-form-label">Komentar</label>

                                <div class="col-sm-9">

                                    <textarea name="komentar" class="form-control"></textarea>

                                </div>

                            </div>

                            <div class="form-group row">

                            <input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp

                            <input type="reset" class="btn btn-danger" value="Hapus">&nbsp

                            <a class="btn btn-info" href="home.php">Kembali</a>&nbsp

                        </div>

                        </form>

                        <hr>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3"></div>

    </div>

    </div>

</body>



</html>



<?php

$submit = @$_POST['submit'];

If (isset($submit)) {

    $nama = $_POST['nama'];

    $email = $_POST['email'];

    $komentar = $_POST['komentar'];

    $conn = mysqli_connect("localhost", "root", "", "bukutamu_iimhungkul") or die("koneksi gagal");

    $sql = "INSERT INTO

    Bukutamu_iimhungkul (nama,email,komentar) VALUES ('$nama','$email','$komentar')";

    $result = mysqli_query($conn, $sql);

    If ($result == true) {

?><script type="text/javascript">

            Window.location = 'home.php';

        </script><?php

                } else {

                    echo "error";

                }

            }

             ?>

