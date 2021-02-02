<!DOCTYPE html>
<html>

<head>
    <title>Design a basic product listing page in list form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;

        }

        .navbar {
            display: flex;
            position: relative;
            justify-content: space-between;
            padding: 5px 0;
        }

        .container {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
            padding: 5px 15px;
        }

        .container {
            display: flex;
        }

        .navbar-brand {
            padding: 5px 0px;
            margin: 0px 16px 0px 0px;
            font-size: 40px;
            color: black;
            text-shadow: 2px 2px red;
        }

        .navbar-brand-link {
            display: flex;
        }

        a {
            font-size: 30px;
        }

        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;

        }

        .nav-links {
            display: flex;
        }

        .nav-links li {
            display: inline-block;

        }

        .nav-links li a {
            text-decoration: none;
            color: darkgray;
            padding: 8px 12px;
            text-align: center;
        }

        .nav-links li a:hover {
            color: black;
        }

        h1 {
            text-align: center;
            background-color: black;
            color: #8A2BE2;
            font-size: 50px;
            font-weight: bolder;
            text-decoration: underline;
            margin: 0;
        }
        h2{
            text-align: center;
            background-color:#198754;
            font-size: 40px;
            font-weight: 800;
            color: blue;
            margin: 0px;  
            margin-top: 10px;
        }
        .key2-containers{
            display: flex;
            flex-wrap: nowrap;
        }
        .item-containers{
            flex :33%;
            margin: 15px 0px 10px;

        }
        .item-list{
            list-style-type: none;
            font-size: 18px;
            color: black;
            font-weight: 650;
            line-height: 1.5;
            text-align: center;
            
        }
        img{
            height: 150px;
            width: 200px;
            padding: 15px, 0px 10px;
        }
        .mobileimg{
            height: 250px;
            width: 150px;
        }
        .item-list li{
            margin-bottom: 8px;
        }
        .addcartbtn{
            background-color:darkcyan;
            border: none;
            font-size: 20px;
            color: white;
            outline: none;
            box-shadow: 1px 4px grey;
            text-decoration: none;
            display: inline-block;
            padding: 5px 50px;
            font-weight: 700;
            border-radius: 5%;
            margin-left: 15px;
            margin-right: 15px;
        }
        span{
            color: #212529;  
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
                "brand" => "Samsung",
                "price" => "$134.00"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia",
                "price" => "$164.00"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple",
                "price" => "$104.00"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung",
                "price" => "$44.00"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola",
                "price" => "$334.00"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple",
                "price" => "$165.00"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard",
                "price" => "$135.00"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto",
                "price" => "$124.00"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari",
                "price" => "$154.00"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget",
                "price" => "$130.00"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff",
                "price" => "$104.00"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany",
                "price" => "$164.00"
            )
        )
    )
);
?>

<body>
    <div class="navbar">
        <div class="container">
            <div class="navbar-brand-link">
                <a class="navbar-brand">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    Shopping
                    <sub>Hub</sub>
                </a>
            </div>
            <div class="nav-links">
                <ul class="navbar-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php

    foreach ($products as $key1 => $value1) {
        echo "<h1>" . $key1 . "</h1>";
        foreach ($value1 as $key2 => $value2) {
            echo "<h2>" . $key2 . "</h2>";
            echo "<div class = key2-containers>";
            foreach ($value2 as $key3 => $value3) {
                echo "<div class = 'item-containers'><ul class = 'item-list'>";
                if($key2 == "Television"){
                    echo "<img src ='https://e7.pngegg.com/pngimages/363/318/png-clipart-railay-beach-4k-resolution-shore-desktop-beach-television-beach.png'>";
                }
                else if($key2 == 'Mobile'){
                    echo "<img class = 'mobileimg' src = 'https://images.mobileshop.eu/1570092129/product-large/apple-iphone-11-pro-max-dual-esim-64gb-4gb-ram-midnight-green-1.jpg'>";
                }
                else if($key2 == 'Earrings'){
                    echo "<img src = 'https://m.media-amazon.com/images/I/51LqqZHDT4L.jpg'>";
                } else{
                    echo "<img src = 'https://www.kameswarijewellers.com/pub/media/catalog/product/cache/b64eb88fc957bd603c8f7c5c95ff4caf/d/3/xd33a73_2.jpg.pagespeed.ic.Ir1J_iHbCV.jpg'>";
                }
                echo  "<li>" . $value3['id'] . "</li>";
                echo  "<li>" . $value3['name'] . "</li>";
                echo  "<li>" . $value3['brand'] . "</li>";
                echo "<li> <span>" .$value3['price'] ."</span></li>";
                echo "<a href = '#' class = 'addcartbtn'>Add To Cart</a>";
                echo "</ul></div>";    
            }
            echo "</div>";
        }
    }
    ?>

</body>

</html>