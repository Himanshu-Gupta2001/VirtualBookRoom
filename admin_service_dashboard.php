<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
body {
    background-image: url('images/books.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: auto;
}

.innerdiv img {
    margin-left: 0;
}

.innerright,
label {
    color: rgb(16, 170, 16);
    font-weight: bold;
}

.container,
.row,
.imglogo {
    margin: auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 10px;
    margin-left: 0px;
}

input {
    margin-left: 20px;
}

.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: rgb(105, 221, 105);
}

.greenbtn {
    background-color: gray;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-color: #66BFBF;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn:hover {
    background-color: #57b5da;
    border-radius: 30px;
    border: 3px dashed gray;
    transition: border-radius 0.8s ease;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
}

.imglogo {
    opacity: 0.8;
    height: 15rem;
    width: 80%;
    border-radius: 20px;
    border: 5px solid white;
}

.imglogo:hover {
    opacity: 1;
    border-radius: 10rem;
    transition: border-radius 1s ease;
}
</style>

<body>


    <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="images/virtualbookroomyellow.png" /></div>
            <div class="leftinnerdiv">
                <Button class="greenbtn"> ADMIN</Button>
                <Button class="greenbtn" onclick="openpart('addbook')">ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')"> BOOK REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> ADD USER</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> STUDENT REPORT</Button>
                <Button class="greenbtn" onclick="openpart('issuebook')"> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> ISSUE REPORT</Button>
                <a href="index.php"><Button class="greenbtn"> LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">
                <div id="bookrequestapprove" class="innerright portion" style="display:none">
                    <Button class="greenbtn">BOOK REQUEST APPROVE</Button>

                    <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();
            ?>
                </div>
            </div>

            <div class="rightinnerdiv">
                <div id="addbook" class="innerright portion"
                    style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
                    <Button class="greenbtn">ADD NEW BOOK</Button>
                    <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
                        <label>Book Name:</label><input type="text" name="bookname" />
                        </br>
                        <label>Detail:</label><input type="text" name="bookdetail" /></br>
                        <label>Autor:</label><input type="text" name="bookaudor" /></br>
                        <label>Publication</label><input type="text" name="bookpub" /></br>
                        <div>Branch:<input type="radio" name="branch" value="other" />other<input type="radio"
                                name="branch" value="BSIT" />BSIT<div style="margin-left:80px"><input type="radio"
                                    name="branch" value="BSCS" />BSCS<input type="radio" name="branch"
                                    value="BSSE" />BSSE</div>
                        </div>
                        <label>Price:</label><input type="number" name="bookprice" /></br>
                        <label>Quantity:</label><input type="number" name="bookquantity" /></br>
                        <label>Book Photo</label><input type="file" name="bookphoto" /></br>
                        </br>

                        <input type="submit" value="SUBMIT" />
                        </br>
                        </br>

                    </form>
                </div>
            </div>


            <div class="rightinnerdiv">
                <div id="addperson" class="innerright portion" style="display:none">
                    <Button class="greenbtn">ADD Person</Button>
                    <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
                        <label>Name:</label><input type="text" name="addname" />
                        </br>
                        <label>Pasword:</label><input type="pasword" name="addpass" />
                        </br>
                        <label>Email:</label><input type="email" name="addemail" /></br>
                        <label for="typw">Choose type:</label>
                        <select name="type">
                            <option value="student">student</option>
                            <option value="teacher">teacher</option>
                        </select>

                        <input type="submit" value="SUBMIT" />
                    </form>
                </div>
            </div>

            <div class="rightinnerdiv">
                <div id="studentrecord" class="innerright portion" style="display:none">
                    <Button class="greenbtn">Student RECORD</Button>
                </div>
            </div>



        </div>
    </div>


    <script>
    function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(portion).style.display = "block";
    }
    </script>





</body>

</html>