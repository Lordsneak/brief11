<?php
        session_start();
        include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM `articles` ORDER BY id";
        $res = $conn->query($sql);
        while($row=mysqli_fetch_array($res))
        $data[]=$row;
        
        
        foreach($res as $data) 
        
          if (!empty($data)){
        
          $id = $data["id"];
          $title = $data["title"];
          $content = $data["content"];
          $date = $data["date"];
          $admin = "<div><a href='del_post.php?pid=$id'>Delete</a> <a href='edit.php?pid=$id'>Edit</a></div>";
          $posts = "<div><h2><a href='view_post.php?pid=$id'>$title</a></h2><p>$content</p> <h3>$date</h3>$admin</div>";

            } else {
                echo "No Data";
            }
              
    ?>
    <div class="feedbody">

<div class="title"><?php echo $posts; ?></div>


</div>
</body>
</html>