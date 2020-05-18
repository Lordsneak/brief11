<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php 

include_once("../connect.php");

if(isset($_POST['post'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
  
    $sql = "INSERT INTO articles (title, content) VALUES ('$title','$content')";

    if($title == "" || $content == "") {
        echo "Please complete your post!";
        return;
    }
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Post</title>
</head>

<body>
    <form action="post.php" method="post" enctype=multipart/form-data> 
        <input placeholder="Title" name="title" type="text" autofocus size="48"> <br /><br />
        <textarea name="content" id="" cols="50" rows="20"></textarea><br /><br />
        <input type="submit" name="post" value="Add Article">
    </form>

</body>

</html>