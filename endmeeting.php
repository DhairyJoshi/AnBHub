<?php 
    session_start ();

    include ("database_connect.php");

    $sql = "TRUNCATE TABLE `anb_hub`.`live_chat`"; 
    $query = mysqli_query ($conn, $sql);

    $sql2 = "UPDATE `meetings` SET `currentbid` = NULL  WHERE 1";
    $query2 = mysqli_query ($conn, $sql2);

    // $_SESSION['meetingended'] = "true";
    header("location: index.php");
?>