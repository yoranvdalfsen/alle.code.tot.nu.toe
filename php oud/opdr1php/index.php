<!DOCTYPE html>

<html>

<head>

</head>

<body>
<?php
if(!empty($_POST))
   {

        echo $_POST['getal'] * 5;

   } //print_r($_POST);
?>
<form action="" method="post">
<input name ="getal" type="text" value=""><br>
<input name ="submit" type="submit" value="reken"><br>
</form>
<h1>IC1D</h1>

    <?php
        $chips = "gay";
        $color = "red";
        echo "Hello World ". $color ."<br>"; 
        echo "beetje gay is  ". $chips . "<br>";



    ?>



</body>

</html>





