<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php
        #variable created $ followed by the variable name
        $body_temp = 98.7;
        echo $body_temp;
        echo "<p>Body Temperature is $body_temp degrees farenheit ";
        #variable value updated
        $body_temp = 37;
        echo "($body_temp degrees celcius) </p>";
    ?>
</body>
</html>