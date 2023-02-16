<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
 $cfr1 = 0;
 $cfr2 = 0;
 ?>


<?php
 $cfr1 = 0;
 $cfr2 = 0;

    if(isset($_POST[ 'getal1']))
    {

    $actie = "+";
echo $cfr1 . '+' . $cfr2 . '=' . $cfr1 + $cfr2;
echo '<br>';


$actie = "-";
echo $cfr1 . '-' . $cfr2 . '=' . $cfr1 - $cfr2;
echo '<br>';

$actie = "/";
echo $cfr1 . '/' . $cfr2 . '=' . $cfr1 / $cfr2;
echo '<br>';

$actie = "x";
echo $cfr1 . 'X' . $cfr2 . '=' . $cfr1 * $cfr2;
echo '<br>';
    }

else{
    $cfr1=0;
    $cfr2=0;
}
?>
<h1>rekenmachine</h1>
<form method='POST'>
    <input type='number' name='getal1' value='<?php echo $cfr1;?>'> <br>
    <input type='number' name='getal2' value='<?php echo $cfr2;?>'> <br>
    <input type='radio' name='bewerking' value='+'>+
    <input type='radio' name='bewerking' value='-'>-
    <input type='radio' name='bewerking' value='/'>/
    <input type='radio' name='bewerking' value='x'> *
    <input type='submit' value = '='>
</form>



// werkend maken als je button klikt dat hij dan die uitslag geeft