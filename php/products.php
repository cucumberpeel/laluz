<html lang="en">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Order Online</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    <head>
        <title>Your Receipt</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.html">La Luz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.html">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../signUp.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.html">Login</a>
                  </li>
              </ul>
            </div>
        </nav>

        <div class="online-store">
            <h1 class="store" style="font-size: 60px"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip">
                Your Receipt
            </h1>

            <div class="products">
            <?php
                $fname = $_POST['First name'];
                $lname = $_POST['Last name'];
                $zip = $_POST['Zip code'];
                $phone = $_POST['Phone number'];
                $email = $_POST['Email'];
                $ship = $_POST['Shipping method'];
                $card = $_POST['Card'];

                print("<h2>Thanks for your purchase!</h2>");
                foreach($_POST as $name => $value) {
                    if ($name == 'Card') {
                        $private = substr($value, 12);
                        print("<p>$name: XXXX XXXX XXXX $private</p>");
                    }
                    else {
                        print("<p>$name: $value</p>");
                    }
                }
            ?>
            </div>

            <div class="menu">
                <a 
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip"
                href="../products.html">Order Online</a>
                <a 
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip"
                href="../contact.html">Contact Us</a>
                <a 
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip"
                href="../about_us.html">Our Story</a>
            </div>
        </div>
    </body>
</html>