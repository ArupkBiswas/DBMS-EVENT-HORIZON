
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>EVENT HORIZON</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"role="presentation"><a href="home.php"><strong>Home </strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><strong>More Options </strong><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"><strong>Help </strong></a></li>
                            <li role="presentation"><a href="#"><strong>Account Settings</strong></a></li>
                            <li role="presentation"><a href="#"><strong>Logout</strong></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div>
                                <h3>Upload File</h3></div>
                            <form action="upload.php" action="dbphp/upload_database.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Topic" placeholder="Enter Topic">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Author" placeholder="Enter Author Name">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Abstract" placeholder="Enter Abstract"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default btn-primary" type="submit" value="Upload Image" name="upload_btn">Upload </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>