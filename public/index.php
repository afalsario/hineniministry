<?php
session_start();
$_SESSION = array();

include('../config.php');

class InvalidInputException extends Exception{}


//-------------1. Establish DB Connection
$dbc = new PDO('mysql:host=127.0.0.1;dbname=hineni_db', "$username", "$password");

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try
{
    if(!empty($_POST['email']))
    {
        $email = $_POST['email'];
        $query = $dbc->query("SELECT email FROM sub_list WHERE email='$email'");
        if($query->rowCount() != 0)
        {
            $duplicate = "We already have this email address. We'll email you when the site is up.";
        }
        else
        {
            $stmt = $dbc->prepare('INSERT INTO sub_list (email) VALUES (:email)');
            $stmt->bindValue(':email', htmlspecialchars(strip_tags($_POST['email'])), PDO::PARAM_STR);
            $stmt->execute();

            $success = "Thank you!";
        }
    }
    else
    {
        throw new InvalidInputException("Please enter email address.");
    }

}
catch (InvalidInputException $e)
{
    $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hineni Ministry</title>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<? if(isset($success)): ?>
<div class="alert alert-success" role="alert"><? echo $success; ?></div>
<? endif; ?>
<? if(isset($duplicate)): ?>
<div class="alert alert-danger" role="alert"><? echo $duplicate; ?></div>
<? endif; ?>
<img responsive class="animated fadeInLeft" src="img/HineniLogoNew2.png">
<p class="sub-header">Under Construction</p>
<br>
<p>We don't want you to miss out! <br>Enter in your email address and we'll let you know when we're finished.</p>
<form action='#' method='POST'>
<input type="email" name="email">
<button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>

</body>
</html>


