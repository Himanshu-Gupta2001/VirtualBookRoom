<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" contect="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Mini Project</title>
</head>

<body>
    <?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>

    <div class="container login-container">
        <div class="row">
            <h4><?php echo $msg ?></h4>
        </div>
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Student and Teacher Login</h3>
                <form action="login_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email " value="" />
                    </div>
                    <Label style="color:red"><?php echo $emailmsg ?></label>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_pasword" placeholder="Your Password "
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $pasdmsg ?></label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Admin Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email " value="" />
                    </div>
                    <Label style="color:red"><?php echo $ademailmsg ?></label>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_pasword" placeholder="Your Password "
                            value="" />
                    </div>
                    <Label style="color:red"><?php echo $adpasdmsg ?></label>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>