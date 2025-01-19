<!DOCTYPE html>

<html>



<head>

<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css rel="stylesheet">



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



        Table {

            Width: 100%; 

            Border-collapse: collapse; 

        }



        .bgform h3 {

            Font-size: 32px;

            Font-weight: bold;

            Margin-bottom: 20px;

        }



        .bgform .btn {

            Margin: 10px; 

            Padding: 10px 20px; 

            Font-size: 18px; 

            Border-radius: 5px; 

            Font-weight: bold;

        }



        .bgform .btn-success {

            Background-color: #28a745; 

            Border: none;

            Color: white;

        }



        .bgform .btn-danger {

            Background-color: #dc3545; 

            Border: none;

            Color: white;

        }



        .bgform .btn-info {

            Background-color: #17a2b8; 

            Border: none;

            Color: white;

        }



        .bgform .btn:hover {

            Opacity: 0.9; 

        }

        Th{

            Text-align: center;

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

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Nama</th>

                                <th>Email</th>

                                <th>Komentar</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php

                            $conn = mysqli_connect("localhost", "root", "", "bukutamu_iimhungkul");

                            $hasil = $conn->query("select* from bukutamu_iimhungkul ");

                            If (mysqli_num_rows($hasil) > 0) {

                                $no = 0;

                                While ($row = mysqli_fetch_array($hasil)) {

                                    $no++;

                                    echo 

                                    '<tr>

                                    <td>' . $no . '</td>

                                    <td>' . $row['nama'] . '</td>

                                    <td>' . $row['email'] . '</td>

                                    <td>' . $row['komentar'] . '</td>

                                    </tr>';

                                }

                            }

                            ?>

                        </tbody>

                    </table>

                    <a class="btn btn into" href="home.php">Kembali</a>&nbsp

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

