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
    header("Location: ../index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Blog - LOGIN</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../index.php">
                                <H4>BLOG</H4>
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="post.php">Add Post</a></li>
                                    <li class="nav-item"><a class="page-scroll" ><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        
            
            </div> <!-- container -->
            
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <section id="about" class="about-area pt-125 pb-130">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <form action="post.php" method="post" enctype=multipart/form-data> <input placeholder="Title"
                            name="title" type="text"> <br /><br />
                            <textarea name="content" id="" cols="50" rows="20"></textarea><br /><br />
                            <input type="submit" name="post" value="Add Article">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->

   

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Blog <a href="" rel="nofollow"></a></p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->







    <!--====== jquery js ======-->
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="../assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="../assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>

</body>

</html>