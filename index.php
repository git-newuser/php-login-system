<?php include("inc/header.php")?>
<style>
    .cover{
        height:100vh;
        width:100%;
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .cover a{
        padding:1em;
    }
    .time{
        color:lightcoral;
        font-size:35px;
    }
</style>
<?php

    $date = date("Y m d");
    print"<div class='cover'>
    Hello Today is
    <br><br>
     <span class='time'>$date</span>
    <br>
    <p>
    <a href='login.php'>Login</a>
    <a href='register.php'>Register</a>
    </p>
    </div>";
?>
<?php
    include "inc/footer.php";
?>

