<?php
    
    require "../dbconnect.php";
    require "../QueryBuilder.php";
    $post_id = $_GET['id'];
    $table = 'posts';
    $where = 'posts.id='.$post_id;
    
  
    $posts = delete($table,$post_id,$conn);// 3 parameters
    header('location:posts.php');

?>    