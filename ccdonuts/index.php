<?php require 'header.php'; ?>
<head>
    <title>C.C.Donuts</title>
</head>
<body>
    <hr>
    <?php 
        if(isset($_REQUEST['user'])) {
            echo'ようこそ  ', htmlspecialchars($_REQUEST['user']), '様';
        }        
    ?>
    <hr>

<?php require 'footer.php'; ?>