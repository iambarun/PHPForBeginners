<?php
$_SESSION="aa";
if(empty($_SESSION)){
    echo "Session is not Started";
} else {
    echo "Session is set";
}