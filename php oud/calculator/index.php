<?php
// effe testen
echo empty($_POST);
echo '<hr>';

// ben ik niet leeg? ben ik een nummer  & ben ik een nummer ? - voer uit {}
//ben ik leeg? ben ik een nummer  & ben ik een nummer ? - voer niet uit {}
//ben ik leeg? ben ik een nummer  & ben ik geen nummer ? - voer niet uit {}
//ben ik leeg? ben ik geen nummer  & ben ik een nummer ? - voer niet uit {}
if(! empty($_POST) && is_numeric($_POST['getal1']) && is_numeric($_POST['getal2']))

{
   $out = $_POST['getal1']. '*'. $_POST['getal2'];
   $out .= '=';
   $out.=  $_POST['getal1'] * $_POST['getal2'];
}

else { 
$out='<p style="color:red;">pauper reken t is uit</p>';

}
?>


<html>
<body>
    <form method="post" action="">
    <input name="getal1"type="text"><br>
    <input name="getal2"type="text"><br>
    <input name="submit"type="submit"value="calc">
    </form>
</body>
<hr>
<?php echo $out; ?>
</html>
