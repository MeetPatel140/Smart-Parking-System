<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="rgb(00, 00, 00)" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Logout</title>
</head>

<body style="background-color: rgb(00, 00, 20);">
    <?php   
        session_start();                //To start session temperory
        session_unset();                //To unset all variables of session  
        session_destroy();              //To destroy session temperory
        header("Location:index.php");   //To redirect it to specific url again after all sessions get unset & destroys
    ?>
</body>

</html>