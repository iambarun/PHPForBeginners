<?php
require 'includes/db.php';
$conn = dbconnect();
$sql='';

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $sql = "SELECT * 
        FROM article where
        id = " . $_GET['id'];
        $results = mysqli_query($conn,$sql);

        if ($results === false){
            echo mysqli_error($conn);
        }else{
            $article = mysqli_fetch_assoc($results);
        }
    }else {
        $article = null;
    }
}else{
    //http_redirect()
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
                    <h2><?= htmlspecialchars($article['title'])?></h2>
                    <p><?= htmlspecialchars($article['content'])?></p>
                </article>
            </li>
<!--        --><?php //endforeach; ?>
    </ul>
    <?php endif; ?>
<?php require 'includes/footer.php'; ?>


