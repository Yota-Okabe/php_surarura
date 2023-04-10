<!-- if -->
<?php 

    $blog = mktime(15, 30, 0, 4, 8, 2023);
    $post_time = date("Y年m月d日 H時i分秒", $blog);

    if ($blog >= time() - 86400) {
        echo "NEW post";
    }else{
        echo $post_time . " 投稿";
    }

?>