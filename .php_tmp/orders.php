<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order calculation</title>
    <link rel="stylesheet" href="order.css">
</head>

<body>
    <?php

    $breadCount = $_POST["bread"];
    $cookiesCount = $_POST["cookies"];
    if (!$breadCount && !$cookiesCount) {
        echo '<a href="index.php">Go back to homepage</a>' . "<br>";
        die("Error:No data entered.");
    }
    $amountToPay = 2.23 * $breadCount + 1.20 * $cookiesCount;

    echo <<<END

`<table class="table">
<tr class="tRow">
<th class="table-border">Ordered products</th>
<th class="table-border">Ordered amounts</th>
<th class="table-border">Price per stuck</th>
</tr>
<tr class="tRow"><th class="table-border">Bread</th>
<td class="table-border">$breadCount</td><td class="table-border">2.23eur</td>
</tr>
<tr class="tRow"><th class="table-border">Cookies</th>
<td class="table-border">$cookiesCount</td><td class="table-border">1.20eur</td>
</tr>
<tr class="tRow"><th class="result  table-border" >Amount to pay</th><td class="table-border">$amountToPay</td></tr>
</table>


END;
    ?>
    <a href="index.php">Go back to homepage</a>
</body>

</html>