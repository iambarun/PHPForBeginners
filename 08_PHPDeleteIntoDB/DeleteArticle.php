<?php
require 'includes/db.php';
require 'includes/article.php';
require 'includes/url.php';
$conn = dbconnect();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $article = getArticle($conn, $_GET['id'], 'id');
    if($article){
        $id = $article['id'];
    }else{
        die('Article not found');
    }
}else{
    die("ID is required");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "DELETE FROM article WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i",  $id);
        if (mysqli_stmt_execute($stmt)) {
            redirect("/php/08_PHPDeleteIntoDB");
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
}?>
<?php require 'includes/header.php';?>
<p> Are you sure ??</p>
<h2> Delete Article</h2>
    <form method="post">
        <button>Delete Article</button>
    </form>
<?php require 'includes/footer.php'; ?>