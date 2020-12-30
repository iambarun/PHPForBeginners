<?php require 'includes/header.php'; ?>
<?php
require 'includes/db.php';
$errors =[];
$title = '';
$content = '';
$published_at = '';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];
    if ($title == ''){
        $errors[] = 'title is required';
    }
    if ($content == ''){
        $errors[] = 'content is required';
    }
    if ($published_at != ''){
        $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);
        if($date_time === false){
            $errors[] = 'Invalid data format';
        }else {
            $date_errors = date_get_last_errors();
            if($date_errors['warning_count'] > 0){
                $errors[] = 'Invalid date and Time';
            }
        }
    }
    if (empty($errors)) {
        $conn = dbconnect();
        $sql = "INSERT INTO article 
            (title, content, published_at) VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            if ($published_at == ''){
                $published_at = null;
            }
            mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);
            if (mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($conn);
//                echo "Inserted record with ID: $id";
                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
                    $protocol = 'htttps';
                }else{
                    $protocol = 'http';
                }
                header("Location: $protocol://" . $_SERVER['HTTP_HOST']. "/php/06_PHPInsertIntoDB/article.php?id=$id");
                exit;
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
        <input id="title" name="title" placeholder="Enter Article Title" value="<?= htmlspecialchars($title) ?>">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" rows="5" cols="50" placeholder="Enter Article Title"><?= htmlspecialchars($content) ?></textarea>
    </div>
    <div>
        <label for="datetime">Published Date and Time</label>
        <input id="datetime" type="datetime" name="published_at" value="<?= htmlspecialchars($published_at) ?>">
    </div>
    <button>Send</button>
</form>
<?php require 'includes/footer.php'; ?>

