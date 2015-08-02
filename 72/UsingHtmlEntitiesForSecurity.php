<?php

if(isset($_GET['day'])&& isset($_GET['date']) && isset($_GET['year'])){ 
    $day  = htmlentities($_GET['day']);
    $date = htmlentities($_GET['date']);
    $year = htmlentities($_GET['year']);

    if(!empty($day) && !empty($date) && !empty($year)){
        echo $day.' '.$date.' '.$year;
    }else{
        echo 'fill in all fields';
    }
}



// mehidhi nomal widihata get eken gannakota HTML tag ekak dunnoth eekedi print wenne ee HTML ekata adala wade.

// namuth htmlentities() athule dunnoth eka HTMl nikam print wei // <strong >s</strong> Submit fdf <= mee akarayata print wei


?>

<form method="get" action="UsingHtmlEntitiesForSecurity.php">

    Day:<br><input type="text" name="day"><br>
    Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="year"><br>


    <br><input type="submit" value="Submit" name="date">




</form>


    