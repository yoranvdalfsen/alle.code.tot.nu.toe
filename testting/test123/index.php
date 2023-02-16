<?php
function cirkel($straal)
{
    $omtrek = $straal + $straal * pi();
    $oppervlakte = $straal * $straal * pi();
    
    return 'Omtrek = '. $omtrek . '<br />Oppervlakte = ' . $oppervlakte;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!empty(trim($_POST['straal'])) && is_numeric($_POST['straal']))
    {
        echo cirkel($_POST['straal']);
    }
    else
    {
        echo '<p>Vul een getal in!</p>';
        echo '<p><a href="javascript:history.back(-1)">Ga terug</a></p>';
    }
}
else
{
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Straal: <input type="text" name="straal" /> <input type="submit" value="Verzenden" /></p>
    </form>
    <?php
}
?>