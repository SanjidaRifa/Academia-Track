<?php
include "database.php";

session_start();
if (!isset($_SESSION["AID"])) {
    echo "<script>window.open('index.php?mes=Access Denied...','_self');</script>";
    exit(); // Added to stop further execution if session is not set
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Academia Track</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include "navbar.php"; ?><br>
    <img src="1.jpg" style="margin-left:30px;" class="sha" width="1300" height="300">
        
    <div id="section">
        <?php include "sidebar.php"; ?><br><br><br>
        
        <h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
        
        <div class="content1">
            <h3>View Staff Details</h3><br>
            <form id="frm" autocomplete="off">
                <input type="text" id="txt" class="input">
            </form>
            <br>
            <div id="box"></div>
        </div>
    </div>
    
    <?php include "footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#txt").keyup(function(){
                var txt = $(this).val();
                if(txt !== "") {
                    $.post("search.php", { s: txt }, function(data){
                        $("#box").html(data);
                    });
                }
            });
        });
    </script>
</body>
</html>