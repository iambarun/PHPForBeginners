<?php
//fAtDw7xBSUOhjNBs
$articles = [
    [
        "title" => "First Post",
        "content" => "This is my first post"
    ],
    [
        "title" => "Second Post",
        "content" => "This is my Second post"
    ],
    [
        "title" => "Third Post",
        "content" => "This is my Third post"
    ],
    [
        "title" => "Fourt Post",
        "content" => "This is my Fourth post"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>My Blog</h1>
</header>

<main>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><?= $article['title']?></h2>
                    <p><?= $article['content']?></p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
</main>


</body>
</html>

