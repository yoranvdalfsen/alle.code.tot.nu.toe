<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1> arrays</h1>
    <?php
    echo 'hello world';


    $studenten = array ('stefan','kees','jan', ) ;
   $leeftijden = array('16' , '17' , '18');
foreach ($studenten as $naam) {
    echo'<br>';
    echo $naam;
};
foreach ($leeftijden as $leeftijd) {
    echo'<br>';
    echo $leeftijd;
};
?>

</body>
</html>