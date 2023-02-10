<?php

require("mail.php");

function validate ($name, $email, $subject, $message, $hello) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if(isset($_POST["hello"])){
    if(validate(...$_POST)){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";
        
        // send email

        sendMail($subject, $body, $email, $name, true);

        $status = "success";
    }
    else{
        $status = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">
    <title>Contact Us!</title>
</head>
<body>

  <?php if($status == "danger"): ?>
    <div class="alert  text-danger" id="RedAlert">
        <span> <i class="fa-solid fa-circle-exclamation"></i> Error, please try again</span>
    </div>
  <?php endif ?>
       
  <?php if($status == "success"): ?>
    <div class="alert text-success" id="GreenAlert">
        <span> <i class="fa-solid fa-circle-check"></i> Your email was sent successfully</span>
    </div>
  <?php endif ?>

  <form action="./" method="POST">

    <div class="container" id="structure">
        <h1>Contact us!</h1>
        <div class="path">
            <label for="name" class="form-label" >Name: </label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="path">
            <label for="email" class="form-label">Email: </label>
            <input class="form-control" type="email" name="email" id="email" placeholder="example@write.com">
        </div>

        <div class="path">
            <label for="subject" class="form-label" >Subject: </label>
            <input class="form-control" type="text" name="subject" id="subject">
        </div>

        <div class="path">
            <label for="message" class="form-label" >Mesage: </label>
            <textarea class="form-control" name="message" id="message"></textarea>
        </div>

        <div class="btn btn-primary" id="button">
            <button name="hello" type="submit" class="btn btn-primary"> Send Message</button>
        </div> 

    </div>

        <div class="information">
            <div class="info">
                <span> <i class="fa-solid fa-location-dot"></i> 47 Durham St.
                    Salt Lake City, UT 84119</span>
            </div>
      
            <div class="info">
                <span> <i class="fa-solid fa-phone"></i> +1 (655) 487-7027   </span>
            </div>
        </div>

    </form>

    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/df212eb80d.js" crossorigin="anonymous"></script>
</body>
</html>