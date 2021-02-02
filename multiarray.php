<!DOCTYPE html>
<html>

<head>
    <title>Design a basic product listing page in table</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: thistle;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        h1 {
            text-align: center;
            color: red;
        }

        table {
            border: 3px solid black;
            width: 100%;
            text-align: center;
            outline: none;
        }

        th {
            font-size: 28px;
            font-weight: bolder;
            border-bottom: outset;
            border-right: outset;
        }

        h1 {
            font-style: oblique;
            color: red;
        }

        td {
            font-size: 20px;
            line-height: 2.0;
        }
        ul{
            list-style-type: none;
            font-size: 20px;
            line-height: 1.5;
        }
        div{
            float:left;
            min-width: 50%;
            display: flex;
       }

       
    </style>
</head>
<?php
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);
echo " <h1> Section-1:- List All the Products. </h1> <hr> <br>";
echo "<table>";
echo "<tr>";
echo "<th> Category </th>";
echo "<th> Sub-Category </th>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Brand </th>";
echo "</tr>";
foreach ($products as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            echo "<tr>";
            echo  "<td>" . $key1 . "</td>";
            echo  "<td>" . $key2 . "</td>";
            echo  "<td>" . $value3['id'] . "</td>";
            echo  "<td>" . $value3['name'] . "</td>";
            echo  "<td>" . $value3['brand'] . "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";

echo " <h1> Section-2:- List All the Products in the Moboile Category. </h1> <hr> <br>";
echo "<table>";
echo "<tr>";
echo "<th> Category </th>";
echo "<th> Sub-Category </th>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Brand </th>";
echo "</tr>";
foreach ($products as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            if ($key2 == "Mobile") {
                echo "<tr>";
                echo  "<td>" . $key1 . "</td>";
                echo  "<td>" . $key2 . "</td>";
                echo  "<td>" . $value3['id'] . "</td>";
                echo  "<td>" . $value3['name'] . "</td>";
                echo  "<td>" . $value3['brand'] . "</td>";
                echo "</tr>";
            }
        }
    }
}
echo "</table>";


echo " <h1> Section-3:- List All the Products with brand name Samsung. </h1> <hr> <br>";

foreach ($products as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            if ($value3['brand'] == "Samsung") {
                /*echo "<tr>";
                echo  "<td>" . $key1 . "</td>";
                echo  "<td>" . $key2 . "</td>";
                echo  "<td>" . $value3['id'] . "</td>";
                echo  "<td>" . $value3['name'] . "</td>";
                echo  "<td>" . $value3['brand'] . "</td>";
                echo "</tr>";*/
                echo "<div> <ul>";
                echo "<li> Product ID: " . $value3['id'] . "</li>";
                echo "<li> Product name: " . $value3['name'] . "</li>";
                echo "<li> Subcategory: " . $key2 . "</li>";
                echo "<li> Category: " . $key1  . "</li>";
                echo "</ul> </div>";
            }
        }
    }
}


echo " <h1> Section-4:-Delete Product with id  = PR003 </h1> <hr> <br>";
echo "<table>";
echo "<tr>";
echo "<th> Category </th>";
echo "<th> Sub-Category </th>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Brand </th>";
echo "</tr>";
foreach ($products as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            if ($value3['id'] == 'PR003') {
                continue;
            }
            echo "<tr>";
            echo  "<td>" . $key1 . "</td>";
            echo  "<td>" . $key2 . "</td>";
            echo  "<td>" . $value3['id'] . "</td>";
            echo  "<td>" . $value3['name'] . "</td>";
            echo  "<td>" . $value3['brand'] . "</td>";
            echo "</tr>";
        }
    }
}

echo "</table>";


echo " <h1> Section-5:-Update product name = BIG-555 with id = PR002</h1> <hr> <br>";
echo "<table>";
echo "<tr>";
echo "<th> Category </th>";
echo "<th> Sub-Category </th>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Brand </th>";
echo "</tr>";
foreach ($products as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            if ($value3['id'] == "PR002") {
                $value3['name'] = "BIG-555";
            }
            echo "<tr>";
            echo  "<td>" . $key1 . "</td>";
            echo  "<td>" . $key2 . "</td>";
            echo  "<td>" . $value3['id'] . "</td>";
            echo  "<td>" . $value3['name'] . "</td>";
            echo  "<td>" . $value3['brand'] . "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";




?>

<body>
</body>

</html>