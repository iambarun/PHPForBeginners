<?php
require 'classes/Database.php';
require 'includes/auth.php';
session_start();

$db = new Database();
$conn = $db->getConn();

$sql = "SELECT * 
        FROM article
        ORDER BY published_at;";

$results = $conn->query($sql);

$articles = $results->fetchAll(PDO::FETCH_ASSOC);

?>
<?php require 'includes/header.php'; ?>

<?php  if(isLoggedIn()): ?>
    <p>You are logged in. <a href="logout.php">Logout</a> </p>
    <a href="NewArticle.php">New Article</a>
<?php else: ?>
    <p>You need to log in. <a href="login.php">Login</a> </p>
<?php endif; ?>

<!--    <a href="EditArticle.php">Edit Article</a>-->
    <?php if (empty($articles)): ?>
        <p>No Articles Found</p>
    <?php else: ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title']?></a></h2>
                    <p><?= htmlspecialchars($article['content'])?></p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
<?php require 'includes/footer.php'; ?>


