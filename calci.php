<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- <link rel="stylesheet" href="style.css">-->
    <style>
        body {
            background: linear-gradient(90deg,
                    rgba(2, 100, 140, 1) 17%,
                    rgba(1, 3, 9, 0.989233193277311) 50%,
                    rgba(179, 0, 9, 1) 89%);
        }

        .first {
            border-radius: 15px;
            background-color: #f4e4bc;
            width: 380px;
            margin: auto;
            height: auto;
            padding: 20px;
            margin-top: 30px;
        }

        input[type="text"] {
            width: 94%;
            height: 70px;
            padding: 10px;
            font-size: 25px;
            background-color: #c7dec7;
            outline: none;
            border-radius: 10px;
        }

        input[type="submit"] {
            width: 86px;
            height: 60px;
            padding: 10px;
            font-size: 25px;
            font-weight: bold;
            border-radius: 10px;
            background-color: #2F4F4F;
            color: white;
            margin: 3px;
            outline: none;
        }

        #del {
            width: 100%;
            background-color: #2F4F4F;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>


<?php
$num = "";
$result = "";
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$_cookie_value2 = "";

if (isset($_POST['display'])) {
    $num = $_POST['display'];
} else {
    $num = "";
}

if (isset($_POST['submit'])) {
    $num = $_POST['display'] . $_POST['submit'];
} else {
    $num = "";
}

if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['display'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
    $_cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $_cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}


if (isset($_POST['equals'])) {
    $num = $_POST['display'];
    switch ($_COOKIE['op']) {
        case "+": {
                $result = $_COOKIE['num'] + $num;
                break;
            }
        case "-": {
                $result = $_COOKIE['num'] - $num;
                break;
            }
        case "*": {
                $result = $_COOKIE['num'] * $num;
                break;
            }
        case "/": {
                $result = $_COOKIE['num'] / $num;
                break;
            }
    }
    $num = $result;
}

if (isset($_POST['clear'])) {
    $num = "";
}


?>

<body>
    <div class="first">
        <h1 style="text-align: center; font: weight 600;">Calculator</h1>
        <form action="" method="POST">
            <input type="text" id="display" name="display" value=<?php echo $num; ?>>
            <br>
            <br>
            <input type="submit" name="submit" value="9">
            <input type="submit" name="submit" value="8">
            <input type="submit" name="submit" value="7">
            <input type="submit" name="op" value="+" style="color: red;">

            <br>
            <br>
            <input type="submit" name="submit" value="6">
            <input type="submit" name="submit" value="5">
            <input type="submit" name="submit" value="4">
            <input type="submit" name="op" value="-">

            <br>
            <br>
            <input type="submit" name="submit" value="3">
            <input type="submit" name="submit" value="2">
            <input type="submit" name="submit" value="1">
            <input type="submit" name="op" value="*">

            <br>
            <br>
            <input type="submit" name="clear" value="C">
            <input type="submit" name="submit" value="0">
            <input type="submit" name="equals" value="=">
            <input type="submit" name="op" value="/">
            <br>
            <br>
        </form>
    </div>
    <?php
    ?>

</body>

</html>