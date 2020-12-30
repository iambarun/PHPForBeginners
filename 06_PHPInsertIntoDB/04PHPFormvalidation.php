<?php require 'includes/header.php'; ?>
<?php
require 'includes/db.php';
$errors =[];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['title'] == ''){
        $errors[] = 'title is required';
    }
    if ($_POST['content'] == ''){
        $errors[] = 'content is required';
    }
    if (empty($errors)) {
        $conn = dbconnect();
        $sql = "INSERT INTO article 
            (title, content, published_at) VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_at']);
            if (mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($conn);
                echo "Inserted record with ID: $id";
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
    }
}
?>
<h2>New Article</h2>
<?php if (! empty($errors)): ?>
<ul style="background-color: red;color: white">
    <?php foreach ($errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach;?>
</ul>
<?php endif; ?>
<form method="post">
    <div>
        <label for="title">Title</label>
        <input id="title" name="title" placeholder="Enter Article Title">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" rows="5" cols="50" placeholder="Enter Article Title"></textarea>
    </div>
    <div>
        <label for="datetime">Published Date and Time</label>
        <input id="datetime" type="datetime-local" name="published_at">
    </div>
    <button>Send</button>
</form>
<?php require 'includes/footer.php'; ?>

