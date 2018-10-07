<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Lab</title>
        <style type = "text/css">
            table {border: thick solid black;}
            td, tr, th {border: thin solid black; 
                        padding: 5px;
                        text-align: center;}
        </style>
    </head>
    
    <body>
        <h1>Order Confirmation</h1>
        <p>Your Order has been Processed.</p>
        
        <?php
        $name = $_POST["name"];
        $lightOne = $_POST["lightOne"];
        $lightTwo = $_POST["lightTwo"];
        $lightThree = $_POST["lightThree"];
        $lightFour = $_POST["lightFour"];
        $payment = $_POST["payment"];
        
        // Get totals with tax
        if ($lightOne == "") {
            $oneTotal = 0;
        } else {
            $oneTotal = 2.39 * 1.062;
        }
        if ($lightTwo == "") {
            $twoTotal= 0;
        } else {
            $twoTotal = 4.29 * 1.062;
        }
        if ($lightThree == "") {
            $threeTotal = 0;
        } else {
            $threeTotal = 3.95 * 1.062;
        }
        if ($lightFour == "") {
            $fourTotal = 0;
        } else {
            $fourTotal = 7.49 * 1.062;
        }
        
        $total = $oneTotal + $twoTotal + $threeTotal + $fourTotal;
        ?>
        
        <!-- Output Name and Payment -->
        <p>Name: <?php print ("$name"); ?></p>
        <p>Payment Method: <?php print ("$payment <br />"); ?></p>
        
        <!-- Create table with only purchased items -->
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
            <?php if ($oneTotal != 0) { ?>
                <tr>
                    <td>Four 25-watt light bulbs</td>
                    <td>2.39</td>
                    <td><?php printf ("$ %0.2f", $oneTotal); ?></td>
                </tr>
            <?php } ?>
            <?php if ($twoTotal != 0) { ?>
                <tr>
                    <td>Eight 25-watt light bulbs</td>
                    <td>4.29</td>
                    <td><?php printf("$ %0.2f", $twoTotal); ?></td>
                </tr>
            <?php } ?>
            <?php if ($threeTotal != 0) { ?>
                <tr>
                    <td>Four 25-watt long-life light bulbs</td>
                    <td>3.95</td>
                    <td><?php printf("$ %0.2f", $threeTotal); ?></td>
                </tr>
            <?php } ?>
            <?php if ($fourTotal != 0) { ?>
                <tr>
                    <td>Eight 25-watt long-life light bulbs</td>
                    <td>7.49</td>
                    <td><?php printf("$ %0.2f", $fourTotal); ?></td>
                </tr>
            <?php } ?>
        </table>
        
        <!-- Print rounded total -->
            <?php 
                printf ("<br>TOTAL: $ %0.2f", $total); 
            ?>  
    </body>
</html>