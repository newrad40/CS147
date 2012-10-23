<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Login Result
                </h3>
            </div>
            <div data-role="content">
	      <?php
	 	 if($_POST['user'] == "test" && $_POST['password'] == "test") {
		   echo "Welcome, test!";
		 } else {
		   echo "Incorrect username and password. <br/><br/>";
		   //echo '<a href="../login/app.html">Try Again</a>';
		 }
	      ?>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>
