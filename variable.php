<?php
    require 'header.php';
        #variable created $ followed by the variable name
        $body_temp = 98.7;
        echo $body_temp;
        echo "<p>Body Temperature is $body_temp degrees farenheit ";
        #variable value updated
        $body_temp = 37;
        echo "($body_temp degrees celcius) </p>";
    require 'footer.php';


