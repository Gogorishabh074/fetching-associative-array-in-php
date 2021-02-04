<!DOCTYPE html>
<html>

<head>
  <title>Multiplication table</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      background-color:lightsalmon;
      line-height: 1.5;
      background: linear-gradient(to right, #33ccff 30%, #ccff99 100%);
    }
    h1{
      text-align: center;
      text-decoration: underline;
      
      font-size: 45px;
    }
    .container {
      display: grid;
      grid-template-columns: auto auto auto auto auto;
      grid-gap: 20px;
      font-size: 20px;
      margin-left: 20px;
      margin-right: 20px;
    }
    .grid-container{
      background-color:mistyrose;
    }
    table{
      border: 1px solid black;
      display: block;
      text-align: center;
      box-shadow: 10px 10px  red;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      font-style:italic;
    }
  </style>
</head>

<body>
</body>
<h1> Mathmatical table from 2 to 20</h1>

<?php
echo "<div class ='container'>";
for ($i = 1; $i <= 20; $i++) {
  echo "<div class = 'grid-container'><table>";
  for ($j = 1; $j <= 10; $j++) {
    echo "<tr><td>";
    echo "$i" . ' x ' . "$j" . ' = ' . $i * $j;
    echo "</td></tr>";
  }
  echo "</table></div>";
}
echo "</div>";

/*
<?php/*
    if (isset($_POST['age'])) {
        $dob = $_POST['bdate'];
        $today = new Datetime(date('m.d.y '));
        $diff = $today->diff(date_create($dob));
        printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
    }
    $age = date_diff(date_create(), date_create('1998-07-01 08:20:00'));
    echo $age->format("You are  %Y Year, %M Months, %d Days, %H Hours, %i Minutes, %s Seconds Old");
    */
    ?>
*/ 
?>
</html>