<!DOCTYPE html>
<html lang="en">
<head>
    <title>tafel tabel</title>
</head>
<body>
    <h1>tafel tabel</h1>
<style>
     .table{
    border: 2px solid green 
        }

    .table td{
    border: 2px solid red
    }

    </style>
</body>
</html>

<?php
print_r($_POST);

if(! empty($_POST) && is_numeric($_POST['table']))
{
echo '<table class="table">';
for ($x = 1; $x <= 15; $x++) {
    echo" <tr>".
            "<td> $x </td>".
            "<td> X </td>".
            "<td>".$_POST['table']."</td>".
            "<td>=</td>".
            "<td>".($x * $_POST['table'])."</td>".
        "</tr>";
  }

  echo '<table>';
}
?>
<form action=""method="post">
    tafel <input type ="text" name="table"><br>
    <input type="submit" name="submit" value="toon tabel"><br>

</form>