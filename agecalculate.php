 <?php

   if (isset($_POST['age'])) {
        $age = date_diff(date_create(), date_create('1998-07-01 08:20:00'));
      echo $age->format("You are  %Y Year, %M Months, %d Days, %H Hours, %i Minutes, %s Seconds Old");
   }

 
    ?>
<?php
