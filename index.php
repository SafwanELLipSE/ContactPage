<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <!--Font Awesome Link-->
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container">
        <div class="row mt-2">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-md-5 bg-light pb-5">
                <h2 class="mt-5">Contact Us</h2>
                <form action="index.php" id="Contact Form" class="p-4" method="POST">
                    <div class="col mt-2 mb-2">
                        <label class="pb-1">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" require>
                    </div>
                    <div class="col mt-2 mb-4">
                        <label class="pb-1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" require>
                    </div>
                    <div class="col mt-2 mb-4">
                        <label class="pb-1">Message</label>
                        <textarea name="message" class="form-control">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Send Message</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body .= "User Name: " . $name . "\n";
    $body .= "User Email: " . $email . "\n";
    $body .= "User Message: " . $message . "\n";

    mail("safwanhassan13@gmail.com","Trail Mail",$body);
?>
    <!-- Jquery Js CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap Bundle  Js CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Popper Js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>

</html>