
<?php
    require 'header.php';

        $phrase = 'The truth is rarely pure';
        $author = 'Oscar Wilde';

        echo "<p>It is often said <q>$phrase</q></p>";

        #concatenate the string to the variable
        $phrase = $phrase . ' and never simple';

        echo "<p><q>$phrase</q> <cite>$author</cite></p>";

    require 'footer.php';