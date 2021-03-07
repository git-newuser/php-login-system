
<?php

//Allowing the config file
define("__CONFIG__",true);
//require config file
require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <link href="custom.css" rel="stylesheet" type="text/css">
    <title>register page</title>
</head>
<body>

<div class="container">

<form class="js-login">

    <h3 align="center">register form</h3>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
            <input class="uk-input  uk-form-width-large" type="email" placeholder="Your Email" required>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
            <input class="uk-input  uk-form-width-large" type="text" placeholder="Your Phone Number" required>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input  uk-form-width-large" type="password" placeholder="Your Password" required>
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input class="uk-input  uk-form-width-large" type="password" placeholder="repeat your Password" required>
        </div>
    </div>
    <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-button-primary">Register</button>
</form>
</div>


<?php

include "./inc/footer.php";

?>
</body>
</html>