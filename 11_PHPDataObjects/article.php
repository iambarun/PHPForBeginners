<?php

require 'classes/Database.php';
require 'includes/article.php';

$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
}else{
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

<?php if ($article === null): ?>
        <p>No Articles Found</p>
<?php else: ?>

    <article>
        <h2><?= htmlspecialchars($article['title'])?></h2>
        <p><?= htmlspecialchars($article['content'])?></p>
    </article>

    <a href="EditArticle.php?id=<?= $article['id'];?>">Edit Article</a>
    <a href="DeleteArticle.php?id=<?= $article['id'];?>">Delete Article</a>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>


