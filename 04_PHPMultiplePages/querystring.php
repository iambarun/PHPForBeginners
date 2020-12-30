<?php
require 'db.php';
$conn = dbconnect();
if (isset($_GET['id']) && is_numeric($_GET['id'])){

$sql = "SELECT * 
        FROM article where
        id = ". $_GET['id'];


    $results = mysqli_query($conn,$sql);

if ($results === false){
    echo mysqli_error($conn);
}else{
    $article = mysqli_fetch_assoc($results);
}}else{
    $article = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>My Blog</h1>
</header>

<main>
    <?php if ($article === null): ?>
        <p>No Articles Found</p>
    <?php else: ?>
        <ul>
            <!--        --><?php //foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><?= $article['title']?></h2>
                    <p><?= $article['content']?></p>
                </article>
            </li>
            <!--        --><?php //endforeach; ?>
        </ul>
    <?php endif; ?>
</main>


</body>
</html>


