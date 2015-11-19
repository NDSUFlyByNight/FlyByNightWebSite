<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fly By Night</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default navbar-inverse" role="navigation">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Search Flights</a>
                            </li>
                            <li>
                                <a href="flightStatus.php">Flight Status</a>
                            </li>
                            <li>
                                <a href="checkIn.php">Check in</a>
                            </li>
                        </ul>
                            <?php echo   
                                "<form class='navbar-form navbar-right' action='log_out.php' method='post'>
                                    <div class='form-group'>
                                        <li>
                                            <b><span style='color:#FFFFFF'>" . $_SESSION['first_name']. " " . $_SESSION['last_name'] . "</span></b>
                                        </li>
                                    </div>
                                    <div class='form-group'>
                                        <li>
                                            <button type='submit' class='btn btn-link'>Log Out</button>
                                        </li>
                                    </div>
                                </form>";?>
                    </div>
                </nav>



