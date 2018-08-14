<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="signupnewsitecss.css" rel="stylesheet">
    <script src="ajax.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#signup1').hide();
            $('#btn2').click(function(){
                $('#signup1').show();
                $('#signin1').hide();
            });
            $('#btn1').click(function(){
                $('#signin1').show();
                $('#signup1').hide();
            });
        });
    </script>
    <script>
        function color2(){
            document.getElementById("btn2").style.color="yellow";
            document.getElementById("btn1").style.color="white";
        }
        function color1(){
            document.getElementById("btn1").style.color="yellow";
            document.getElementById("btn2").style.color="white";
        }
    </script>
</head>
<body>
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:150px;">
        <div class="col-lg-6  col-md-6 col-sm-6" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color:rgba(255,0,0,1.00);">
            <div id="carousel1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel1" data-slide-to="1"></li>
                    <li data-target="#carousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="images/3.jpg" alt="First slide image" class="center-block">
                    </div>
                    <div class="item"><img src="images/thumbnails/5.jpg" alt="Second slide image" class="center-block">
                    </div>
                    <div class="item"><img src="images/thumbnails/2.jpg" alt="Third slide image" class="center-block">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="background-color:rgba(1,46,38,1.00);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height:400px;background-image: url('3.jpg');background-size:cover;background-repeat: no-repeat;background-position: center">
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:50px;">
                <div class="col-lg-12 col-md-12 col-sm-12" >
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div id="btn1" onClick="color1()" style="text-align:right;color:yellow">Sign In</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div id="btn2" onClick="color2()" style="text-align:left">Sign Up</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12"  >
                        <div class="col-lg-12 col-md-12 col-sm-12" >
                            <div id="signup1">
                               <form method="POST" action="sign.php" style="color:rgba(255,255,255,1.00)">
                                    <table>
                                        <tr>
                                            <td class="rows">Name</td>
                                            <td><input type="text" class="inputs" name="name" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows">Email Id</td>
                                            <td><input type="text" class="inputs" name="emailid" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows">Phone No.</td>
                                            <td><input type="text" class="inputs" name="phone" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows">Password</td>
                                            <td><input type="password" class="inputs" name="password" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows">Confirm Password</td>
                                            <td><input type="password" class="inputs" name="confirmpass" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows"></td>
                                            <td><button type="submit" value="submit" style="margin-top:15px; color:rgba(255,255,255,1.00);border-bottom-left-radius:10px;background-color:transparent;padding-left:10px;padding-right:10px">Signup</button></td>
                                        </tr>
                                    </table>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="signin1" style="margin-top:100px;">
                                <form id="signingin" method="POST" style="color:rgba(255,255,255,1.00)" enctype="multipart/form-data">
                                    <table>
                                        <tr>
                                            <td class="rows">Email Id</td>
                                            <td><input type="text" class="inputs" name="emailid" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows">Password</td>
                                            <td><input type="password" class="inputs" name="password" required></td>
                                        </tr>
                                        <tr>
                                            <td class="rows"></td>
                                            <td><button type="button" style="margin-top:15px; color:rgba(255,255,255,1.00);border-bottom-left-radius:10px;background-color:transparent;padding-left:10px;padding-right:10px" onclick="signin()">Signin</button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>