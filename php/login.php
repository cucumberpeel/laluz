<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/signUpStyle.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>

    <head>
        <title>Login Authentication</title>
    </head>

    <body>
        <div class="navbar">
            <ul class="navbar-nav">
              <li><a class="navbar-brand" href="../index.html">La Luz</a></li>
              <li><a class="nav-link" href="../index.html">Home</a></li>
            </ul>
        </div>
        <div class="sign-up-form">
            <?php
                $user = $_POST['username'];
                $pwd = $_POST['password'];
                
                $file = fopen("users.txt", "r");
                $flag = FALSE;

                while(!(feof($file))) {
                    $line = fgets($file);
                    $line = rtrim($file);
                    $info = explode(":", $line);
                    // users.txt format: $line= $uname.":".$email. " phone number is: ".$phoneNum.  " password is: " .$password. "\n";
                    if (($user == $info[0]) && ($pwd == $info[5])) {
                        $flag = TRUE;
                        break;
                    }
                }

                if($flag) {
                    print("<h1>Welcome back, $user</h1>");
                    print("<p><a href='../products.html'>Shop</a></p>");
                }
                else {
                    print("<p>Invalid username or password. Please <a href='../login.html'>try again.</a></p>");
                }
                fclose($file);
            ?>
        </div>

    </body>
</html>