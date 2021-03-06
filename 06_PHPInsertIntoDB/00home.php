<?php
require 'includes/db.php';
$conn = dbconnect();
$sql = "SELECT * 
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn,$sql);

if ($results === false){
   echo mysqli_error($conn);
}else{
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<?php require 'includes/header.php'; ?>
    <a href="06PHPRedirectToNewArticle.php">New Article</a>
    <?php if (empty($articles)): ?>
        <p>No Articles Found</p>
    <?php else: ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><a href="00article.php?id=<?= $article['id']; ?>"><?= $article['title']?></a></h2>
                    <p><?= htmlspecialchars($article['content'])?></p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
<?php require 'includes/footer.php'; ?>


