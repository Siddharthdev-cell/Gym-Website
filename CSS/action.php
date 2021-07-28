<?php
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $locality= $_POST['locality'];
    $mobileno= $_POST['mobileno'];
    $Submit= $_POST['Submit']

    if($_POST['Submit']) {
        if(form_reg($name,$age,$gender,$locality,$mobileno)) {
            $success = "REgistration successful";
        }
        else {
            $success = "Registration failed, Contact the gym owner or try again later";
        }
    }
?>