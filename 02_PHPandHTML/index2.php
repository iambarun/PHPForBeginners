<?php
$hour=11;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP and HTML mixing</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Greetings!</h1>
<?php if ($hour<12): ?>
    Good Morning
<?php elseif ($hour<18): ?>
    Good Evening
<?php elseif ($hour<21): ?>
    Good Night
<?php endif; ?>
</body>
</html>