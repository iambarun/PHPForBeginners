<?php
/**
 * @param $conn
 * @param $id
 * @param string $columns
 * @return array|null
 */
function getArticle($conn, $id, $columns = '*'){
    $sql = "SELECT $columns
    FROM article
    where id= :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if($stmt->execute()){
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

/**
 * @param $title
 * @param $content
 * @param $published_at
 * @return array
 */
function validateArticle($title, $content, $published_at){
    $errors = [];
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
    return $errors;
}