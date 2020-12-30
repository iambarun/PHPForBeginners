<?php
require 'includes/db.php';
$conn = dbconnect();

$sql = "SELECT * 
        FROM article where
        id = ". $_GET['id'];

$results = mysqli_query($conn,$sql);

if ($results === false){
   echo mysqli_error($conn);
}else{
    $article = mysqli_fetch_assoc($results);
}
?>
<?php require 'includes/header.php'; ?>
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
<?php require 'includes/footer.php'; ?>


