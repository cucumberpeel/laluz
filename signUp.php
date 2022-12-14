<html lang="en">
    <meta charset="utf-8" />

    <head>
        <title>Sign Up File</title>
    </head>

    <body>
        <div class="header">
            <h1>Sign Up Information</h1>
        </div>
        <div >
            <?php
                $uname = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phoneNum = floatval($_POST['phoneNum']);

                $filea = fopen("users.txt","a") or die("can't open file");

                // create line to store all values
                $line= $uname.":".$email. "\n";

                // write/store line into file
                fwrite($filea, $line);

                // close the file
                fclose($filea);

                print("Done! Data written to file users.txt. Check file users.txt for output!");

            ?>
        </div>
    </body>
</html>