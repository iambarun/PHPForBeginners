<?php
$months=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
$counter=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP and HTML mixing</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Greetings!</h1>
<?php

while ($counter<=11){
    if($counter == 1){
        ?>
        <h3>
            <?php echo($months[$counter]." ")?>is 28 days.
        </h3>
        <?php
    }elseif ($counter == 3 or $counter == 5 or $counter == 8 or $counter == 10){
        echo($months[$counter]." ")?>is 30 days.<br><?php
    }else{
        echo($months[$counter]." ")?>
        is 31 days.<br>
        <?php
    }
    $counter=$counter+1;
}?>
</body>
</html>