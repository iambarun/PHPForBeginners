<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'includes/db.php';
    $conn = dbconnect();
    $sql = "INSERT INTO article (title, content, published_at)
            VALUES ('" . $_POST['title'] . "',
            '" . $_POST['content'] . "',
            '" . $_POST['published_at'] . "')";

    $results = mysqli_query($conn,$sql);

    if ($results === false){
        echo mysqli_error($conn);
    }else{
        $id = mysqli_insert_id($conn);
        echo "Inserted record with ID: $id";
    }
}
?>
<?php require 'includes/header.php'; ?>
<h2>New Article</h2>
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

