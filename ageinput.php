<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Age</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color:salmon;
        }
        .form{
            text-align: center;
            margin-top: 15%;
            font-size: 20px;
            font-weight: bolder;
        }
        input{
            width: 20%;
            height: 30px;
            font-size: 20px;
        }
        span{
            background-color:thistle;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #enter{
            width: 10%;
            background-color:whitesmoke ;
            color: black;
            font-weight: 800;
            font-size: 20px;
            outline: none;
            border: 1px solid black;
            background-color: blanchedalmond;
            box-shadow: 10px 10px darkgoldenrod;
        }
        #todayage{
            width: 50%;
            margin-top: 20px;
            padding: 5px 10px 5px 10px;
            background-color:ghostwhite;
            height: 35px;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <form id="ageinput" class="form" method="POST">
       <span> Enter Your Date of birth:</span> <br><br>
        <input type="date" value="bdate" name="bdate" required><br><br>
        <span> Time of Birth :</span> <br><br>
        <input type="time" name="time" id="timeOfBirth" required><br><br>
        <input type="submit" id = "enter" value="SUBMIT" name="age">
        <div id="todayage"></div>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#ageinput").submit(function(e) {
                e.preventDefault();
                setInterval(() => {
                    $.ajax({
                        type: "POST",
                        url: "agecalculate.php",
                      
                        data: {
                            age: $(this).serialize()
                        },
                        success: function(response) {
                            $("#todayage").text(response);
                        }
                    });
                }, 1000);
            });
        });
    </script>


</body>

</html>