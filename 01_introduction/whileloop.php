<?php
$months=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
$counter=0;
while ($counter<=11){
    if($counter == 1){
        echo($months[$counter]." is 28 days. ");
    }elseif ($counter == 3 or $counter == 5 or $counter == 8 or $counter == 10){
        echo($months[$counter]." is 30 days. ");
    }else{
        echo($months[$counter]." is 31 days. ");
    }
    $counter=$counter+1;
}