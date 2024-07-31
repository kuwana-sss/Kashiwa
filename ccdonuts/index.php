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

</body>



<?php require 'footer.php'; ?>