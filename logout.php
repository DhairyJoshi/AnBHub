<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>    
    <?php
        session_start ();
        if ($_SESSION ['LoggedIn'] == true)
        {   
            session_unset ();
            session_destroy ();
            header ("location: index.php");
            exit;
        }
        else
        {
            session_unset ();
            session_destroy ();
            header ("location: index.php");
            exit;
        }
    ?>
</body>
</html>