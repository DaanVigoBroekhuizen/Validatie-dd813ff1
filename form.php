<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post" name="lijst">
    <input type="text" name="email">
    <input type="submit" name="submit">
</form>
    
<?php


$email = $_POST['email'];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is een geldig email adres");
  }else{
    echo("$email is niet een geldig email adres");
}
?>
</body>
</html>


