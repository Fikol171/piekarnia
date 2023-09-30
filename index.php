<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backery order form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="body">
    <h1 class="buckeryName">Bread & Breakwest</h1>
    <h2>Welcome in my buckery</h2>
    <div class="order">
        <form method="post" action="orders.php">
            <fieldset>
                <p>
                    <label class="label">Order Bread (stuk-price=2.23euro)
                        <input class="input" type="number" name="bread" placeholder="enter amount of bread" />
                    </label>
                </p>
                <p> <label class="label">Order cookies (stuk-price=1.20euro)
                        <input class="input" type="number" name="cookies" placeholder="enter amount of cookies" />
                    </label></p>
            </fieldset>
            <input type="submit" class="button" value="Send" />
        </form>
    </div>
</body>

</html>