<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$render = '';
 $render .= 'tafels<br>';

 $tafel =1 
    if ( isset($_POST['tafel']))
    {
        $tafel = $_POST['tafel']
    }

 for( $i = 0 ; $i <= 10; $i++)
    {
        $render .= $i . 'x' . $tafel . '=';
        $render .= $i * $tafel;
        $render .= '<br>';
    }
    echo $render;
    ?>
    <form method='post'>
<input type='number'name='tafel'value = '1'>
<input type ='submit'>
</form>
</body>
</html>
