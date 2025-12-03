<?php
    //SCCS - LAB10
    $username = $_GET["name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE 1</title>
</head>
<body>
    <?php
        echo $username === "INVALID" ?
        "<h1>USE A VALID USER ACCOUNT</h1><br><form action='/'><button>RETURN TO LOGIN</button></form>" : 
        "<h1>Hello $username</h1>" 
    ?>
</body>
</html>