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
        $post[]=$row;
        
        

	foreach ($res as $post): ?>
			<div class="post" style="margin-left: 0px;">
				<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
				<!-- Added this if statement... -->
				<?php if (isset($post['topic']['name'])): ?>
				<?php endif ?>
					<div class="post_info">
						<h3><?php echo $post['title'] ?></h3>
						<div class="info">
							<p><?php echo $post['content'] ?></p>
							<span><?php echo $post["date"]; ?></span>
							
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?> 




</div>
</body>
</html>