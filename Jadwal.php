<?php
include "database.php";

$query = "SELECT * FROM jadwal";
$data =$sdb->prepare($query);
$data->execute();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="bg-primary">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#">Ramadhan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="info.php" tabindex="-1" aria-disabled="true">Info</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Jadwal.php">Jadwal Ramadhan <span class="sr-only">(current)</span></a>
                </li>  
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <a href="Tambah.php" class="btn btn-primary">Tambah Data</a>
                <table class="table text-center">
                    <thead>
                        <th>Hari</th>
                        <th>Tanggal(April/Mei)</th>
                        <th>Imsyak</th>
                        <th>Subuh</th>
                        <th>Zuhur</th>
                        <th>Ashar</th>
                        <th>Magrib</th>
                        <th>Isya</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </thead>
                    <tbody>
                        <?php 
                        
                        while ($row = $data->fetch()) { ?>
                            <tr>
                            <td><?php echo $row['hari']?></td>
                            <td><?php echo $row['tanggal']?></td>
                            <td><?php echo $row['imsyak']?></td>
                            <td><?php echo $row['subuh']?></td>
                            <td><?php echo $row['zuhur']?></td>
                            <td><?php echo $row['ashar']?></td>
                            <td><?php echo $row['magrib']?></td>
                            <td><?php echo $row['isya']?></td>
                            <td><a class="btn btn-info" href="Edit.php?id=<?php echo $row['id']?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="Hapus.php?id=<?php echo $row['id']?>">Hapus</a></td>
                            </tr>
                        <?php }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>