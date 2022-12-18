

<html lang="en">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Search Result</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    <head>
        <title>Search Result</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="../search.html">Search</a>
                  </li>
              </ul>
            </div>
        </nav>

        <div class="online-store">
            <h1 class="subTitle" style="font-size: 60px"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip">
                Check for the result:
            </h1>

            <div class="textBox">
            <?php
            $productName = $_GET['productName'];

			// open the file product.txt

			$file = fopen("products.txt", "r");

			$flag = FALSE;

			// read one line at time from file and assign each line to a string called $line
			while(!(feof($file)))
			{

				// get one line at time from file
				$line= fgets($file);

				// remove end of line character from line using rtrim function
				$line = rtrim($line);

				// split string on : to get each field separatly and put values in an array

				$info = explode(":", $line);

				// check for a product match between what user input and 
				// whats in file convert both strings to lowercase

				if ((strtolower($productName)) == (strtolower($info[0])))
				{

				// if there is a match set flag to true and exit
				$flag = TRUE;
				break;
				}

			}

			// check to see if there is a match flag = TRUE 

			if ($flag)
				{
				print(" <h4>Here is information about this product:</h4>");

				foreach ($info as $value)
					{ 
					print("<li> $value "); 
					}
				}
			else
			{
				print("Sorry- We don't have this product at our shop!");
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
