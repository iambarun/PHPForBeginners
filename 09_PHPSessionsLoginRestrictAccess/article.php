<?php
require 'includes/db.php';
require 'includes/article.php';
$conn = dbconnect();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
}else{
    $article = null;
}
?>
<?php require 'includes/header.php'; ?>
    <?php if ($article === null): ?>
        <p>No Articles Found</p>
        <a href="NewArticle.php">New Article</a>
    <?php else: ?>
        <a href="NewArticle.php">New Article</a>
    <ul>
<!--        --><?php //foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><?= htmlspecialchars($article['title'])?></h2>
                    <p><?= htmlspecialchars($article['content'])?></p>
                </article>
                <a href="EditArticle.php?id=<?= $article['id'];?>">Edit Article</a>
<!--                <form method="post" action="DeleteArticle.php?id=--><?//=$article['id'];?><!--">-->
<!--                    <button>Delete Article</button>-->
<!--                </form>-->
                <a href="DeleteArticle.php?id=<?= $article['id'];?>">Delete Article</a>
            </li>
<!--        --><?php //endforeach; ?>
    </ul>
    <?php endif; ?>
<?php require 'includes/footer.php'; ?>


