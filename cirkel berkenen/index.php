<!DOCTYPE html>
<head>

<title>Document</title>
</head>
<body>
    <?php
print_r($_POST);

if(! empty($_POST) && is_numeric($_POST['diameter']))
{
echo '<table class="table">';
for ($x =3.14:) {
    echo($x * $_POST['diameter']):
    
  }

  echo '<table>';

}


    ?>


<form action=""method="post">
    diameter <input type ="text" name="diameter"><br>
    <input type="submit" name="submit" value="toon antwoord "><br>

</form>
</body>
</html>