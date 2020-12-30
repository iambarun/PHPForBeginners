<?php
/**
 * @param
 * @param
 *
 * @return array|null
 */
function getArticle($conn, $id){
$sql = "SELECT * FROM article where id=?";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false){
    echo mysqli_error($conn);
}else{
    mysqli_stmt_bind_param($stmt, "i", $id);
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }else{
        return null;
    }
}
}

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
?>