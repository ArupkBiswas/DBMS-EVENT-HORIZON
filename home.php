<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>EVENT HORIZON</strong></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                       	 <li role="presentation"><a href=""><strong>
                        	<?php
                        		if (isset($_SESSION['u_email']))
                        		{
                        			$temp = $_SESSION['u_firstname'] ;
                        			echo "Hello $temp";
                        		}
                        		else
                        		{
                        			echo "You're not logged in";
                        		}
                        	?>
                        </strong></a></li>
                        <li class="active" role="presentation"><a href="index.php"><strong>Upload Page</strong></a></li>

                        <li role="presentation"><a href="set1.php"><strong>Settings </strong></a></li>
                        <li role="presentation"><a href="includes/logout.inc.php"><strong>
                        	<?php
                        		if (isset($_SESSION['u_email']))
                        		{
                        			echo "Logout";
                        		}
                        		else
                        		{
                        			echo "Login";
                        		}
                        	?>
                        </strong></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>