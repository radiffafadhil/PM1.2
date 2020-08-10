<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ANONIM</title>
</head>

<body>
    <header>
        <h3>LIST LAPORAN ANONIM</h3>
    </header>

    <nav>
        <a href="form_anonim.php">[+] Tambah Baru</a>
    </nav>

    <table class="table" border="1px">
  <thead class="bg-success">
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Detail</th>
      <!-- <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tindakan</th> -->
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM anonim";
        $query = mysqli_query($db, $sql);

        while($anonim = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$anonim['judul']."</td>";
            echo "<td>".$anonim['tgl']."</td>";          
            echo "<td>";
            echo "<a href='detail.php'>Lihat</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
  </tbody>
</table>

    <p>Total Laporan: <?php echo mysqli_num_rows($query) ?></p>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    </body>
</html>