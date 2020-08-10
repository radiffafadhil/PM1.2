<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<Style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</Style>
<body>
<table style="width:100%">
  <!-- <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr> -->
  <tbody>
  <?php
        $sql = "SELECT * FROM anonim";
        $query = mysqli_query($db, $sql);

        while($anonim = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$anonim['judul']."</td>";
            echo "<td>".$anonim['isi']."</td>";          
            echo "<td>";
            echo "<a href='detail.php'>Lihat</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
  </tbody>
</table>
</body>
</html>