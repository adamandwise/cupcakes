<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
<?php
    $username = $_POST['name'];
    $flavor = $_POST['flavor'];
    $price = 3.50 * sizeof($flavor);

    echo "<h1>Thank you, $username  , for your order!</h1>";
    echo "<h1>Order Summary:</h1>";

            foreach ($flavor as $selected) {
                echo "<li>" . $selected . "</br>";
            }
                echo "<h1>Order total: $price</h1>" ;

?>

</body>
</html>