<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prospect</title>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="../favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<header>
    <?php include("parts/header.php"); ?>
</header>
<div id="main-panel">
    <div id="main-content">
        <?php include("parts/content.php"); ?>
    </div>
</div>
<footer>
    <?php include("parts/footer.php"); ?>
</footer>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
