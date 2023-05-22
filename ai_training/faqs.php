<?php
/*
session_start();
if(!isset($_SESSION['account_type'])){
    header("Location: index.php");
    exit;
}
elseif($_SESSION['account_type']=="GA"){
    header("Location: GA_Home.php");
    exit;
}
$now=time();
if($now > $_SESSION['expire']) {
    session_destroy();
    header("Location: index.php");  
}*/
?>
<!DOCTYPE html>
<html lang="en" >
<head>

    <meta charset="UTF-8">
    <title>FAQs</title>
    <link rel="icon" href="../_assets/Kean_University_Logo.svg.png">
    <link href="../_CSS/font_family.css" rel="stylesheet">
    <link href="../_CSS/home.css" rel="stylesheet">

    <!-- START NAV BAR -->

    <?php include("../navbar.php"); ?>
    
    <!--- END NAV BAR --->
</head>


<body class='theme-font' background-size="cover">
  
    <div class="subtitle">
        FAQs
    </div>
</body>
</html>