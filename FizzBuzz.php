<DOCTYPE! html>
<html>
 <head>
 <?php
    for($i = 1; $i <= 100; $i++) {
        if($i % 3 == 0) {
          echo "Fizz";
          }

        elseif($i % 5 == 0) {
          echo "Buzz";
          }

        elseif($i % 3 == 0 and $i % 5 == 0) {
          echo "FizzBuzz";
          }

        else {
          echo "<h6>" . $i . "</h6>";
          }
        }
    ?>
 </head>
<html>
