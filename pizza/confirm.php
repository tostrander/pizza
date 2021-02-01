<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/head.html');
?>
<body>
    <div class="container" id="main">

        <?php
            //Autoglobal array
            /*
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";
            */

            /*["fname"]=>string(3) "Joe"
              ["lname"]=>string(3) "Shmo"
              ["address"]=>string(10) "123 Elm St"
              ["method"]=>string(8) "delivery"
              ["toppings"]=>
                  array(2) {
                    [0]=>string(7) "sausage"
                    [1]=>string(9) "pineapple"
                  }
              ["size"]=>string(6) "medium"
            */

            //Get form data
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $method = $_POST['method'];
            $toppings = $_POST['toppings'];
            $size = $_POST['size'];

            //Print summary
            echo "<h3>Thank you for your order, $fname!</h3>";
            //echo "<h3>Thank you for your order, ".$_POST['fname']."!</h3>";

            echo "<h4>Order Summary:</h4>";
            echo "<p>Name: $fname $lname</p>";
            if ($method == 'delivery') {
                echo "<p>Address: $address</p>";
            }
            echo "<p>Method: $method</p>";
            echo "<p>Toppings: ".implode(", ", $toppings)."</p>";
            echo "<p>Size: $size</p>";

        ?>
    </div>
</body>
</html>