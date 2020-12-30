<?php
$articles = ["First post","Another Post", "Read this"];
//var_dump($articles);
//var_dump($articles[2]);
//var_dump($articles[4]);

$articles2 = [1 => "First post", 3 => "Another Post", "Read this"];
//var_dump($articles2);
//var_dump($articles2[2]);
//var_dump($articles2[4]);

//$articles3 = ["first" => "First post",
//    "second" => "Another Post",
//    "Read this"];
//var_dump($articles3);
//var_dump($articles3["first"]);
//var_dump($articles3[4]);

//$count = 12;
//$price = 12.2;
//$array = [$count, $price];
//var_dump($array);

//$articles = ["name" => "First post",
//    "id" => "Another Post",
//    "salary" => 789879,
//    "experience" => 9.6];

//var_dump($articles);

foreach ($articles as $toPrint) {
    echo $toPrint.", ";
}

foreach ($articles2 as $index => $toPrint2) {
    echo $index." - ".$toPrint2.", ";
}