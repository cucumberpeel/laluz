<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/signUpStyle.css" />
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script> -->

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

                // authentication for empty fields
                // if(empty(trim($_POST['username']))) {
                //     echo("Please enter username.");
                // }
                // else {
                //     $user = $_POST['username'];
                // }
                // if(empty(trim($_POST['password']))) {
                //     echo("Please enter password.");
                // }
                // else {
                //     $pwd = $_POST['password'];
                // }
                
                $file = fopen("../users.txt", "r");
                $flag = FALSE;

                while(!(feof($file))) {
                    $line = fgets($file);
                    $line = rtrim($file);
                    $info = explode(":", $line);
                    if (($user == $info[0]) && ($pwd == $info[1])) {
                        $flag = TRUE;
                        break;
                    }
                }

                if($flag) {
                    print("<p>Welcome back, <a href='user.html'>$user</a></p>");
                }
                else {
                    print("<p>Invalid username or password. Please <a href='../login.html'>try again.</a></p>");
                }
                fclose($file);
            ?>
        </div>

    </body>
</html>