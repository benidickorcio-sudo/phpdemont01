
<?php 

    include 'purephp.php';

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO NT01</title>
   

    <a href = "nextpage.php">Next Page</a>
</head>
<body>
    <h1>HELLO WORLD</h1>



    <h3 id="displayusername">Username: <?php echo $username; ?></h3>
    <h3 id="displayuserid">User ID: <?php echo $userid; ?></h3>
    <h3 id="displayschool">School: <?php echo $school; ?></h3>
    <h3 id="displayballpen">Ballpen: <?php echo $ballpen; ?></h3>
    <h3 id="displaynotebook">Notebook: <?php echo $notebook; ?></h3>


    <button type = "button" onclick = "greetuser()">Greet User</button>
    <script src = "external.js"></script>




</body>
</html>