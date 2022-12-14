<html lang="en">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    <head>
        <title>Your Receipt</title>
    </head>

    <body>
        <div class="header">
            <h1>Your Receipt</h1>
        </div>
        <div id="asg7-result">
            <?php
                $fname = $_POST['First name'];
                $lname = $_POST['Last name'];
                $zip = $_POST['Zip code'];
                $phone = $_POST['Phone number'];
                $email = $_POST['Email'];
                $quantity = floatval($_POST['Quantity']);

                print("<h2>Thanks for your purchase, $fname</h2>");

                foreach($_POST as $name => $value) {
                    print("<p>$name: $value</p>");
                }

                $total = $quantity;
                if ($flavor == 'Vanilla') { $total *= 5; }
                else { $total *= 6; }

                print("<h2>Total: $$total</h2>");
            ?>
        </div>
    </body>
</html>