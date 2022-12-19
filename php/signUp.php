<html lang="en">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Success Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    <head>
        <title>Registration Information</title>
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
            <h1 class="subTitle" style="font-size: 60px"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip">
                Thank You!
            </h1>

            <div class="textBox">
            <?php
                // chmod("signUp.php", 0755);
                chmod("users.txt", 0777);
                $uname = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phoneNum = floatval($_POST['phoneNum']);

                $filea = fopen("users.txt","a") ;

                // create line to store all values
                $line= $uname.":".$email. " phone number is: ".$phoneNum.  " password is: " .$password. "\n";

                // write/store line into file
                fwrite($filea, $line);

                // close the file
                fclose($filea);

                print("Done! Thank you for registering with us!");

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