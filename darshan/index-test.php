<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PropKorner</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
                font-family: 'Raleway', sans-serif;
                background-color: white;
            }
            .social { color:#ffffff;
            }

            /*            SHADOW_FOR_TILES*/
            /*            .shadow {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        }*/
            .rowAlign {
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 20px;
            }
            .btn {
                border: none;
                padding: 7px 28px;
                font-size: 16px;
                display: inline-block;
                color: white;
                background: blue;
            }

            .search {
                padding: 7px 28px;
            }

            .head {
                padding-top: 30px;
            }

            /*            ANIMATION_FOR_OUR_LISTING*/
            .zoom {
                padding-left: 0px;
                height: 350px;
                background-repeat: no-repeat;
                background-size: cover;
                border: 2px solid white;
                background-color: green;
                transition: transform .4s;
                margin: 0 auto;
            }

            .zoom:hover {
                -ms-transform: scale(1.3);
                -webkit-transform: scale(1.3); 
                transform: scale(1.3); 
                z-index: 2;
                cursor: pointer;
            }


            /*            GRID_CENTERED*/
            .row-centered {
                text-align:center;
            }

            .col-centered {
                display:inline-block;
                float:none;
                text-align:left;
                text-align: center;
                background-color: #ccc;
            }


            .footertext {
                color: white
            }

            /*            PLACEHOLDER_COLOR_CHANGE*/
            ::-webkit-input-placeholder { 
                text-align: center;
                color: grey;
                font-size: 13px;
            }

            /*            SEARCH_BUTTON_STYLING*/
            .btn {
                background-color: #4CAF50;
            }
            buttonEffect {
                -webkit-transition-duration: 0.4s; 
                transition-duration: 0.4s;
            }

            buttonEffect:hover {
                background-color: #2E7D32; /* Green */
                color: white;
            }
            u {
                text-decoration: none;
                border-bottom: 1px solid white;
            }
            .featured {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                background-repeat: no-repeat;
                background-size: cover;
                border: 2px solid white;
                height: 250px;
                height: 100%;
            }
            .fea {
                /*                 border: 2px solid white;*/
                height: 250px;
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 5px;
                padding-bottom: 5px;
            }
            .featured:hover {
                opacity: 0.7;
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .ourListing {
                transition: box-shadow .3s;
                height: 300px;
                padding-left: 1.5%;
                padding-right: 1.5%;
                padding-top: 1.5%;
                padding-bottom: 1.5%;
            }
            .listings {
                /*                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
                /*border: 1px solid black;*/
                background-repeat: no-repeat;
                background-size: cover;
                border: 2px solid white;
                height: 100%;
                transition: box-shadow .3s;
                transition: transform .3s;
                background-position: center;
            }
            .listings:hover {
                transform: scale(1.1); 
                z-index: 2;
                cursor: pointer;
                border: 2px solid white;
                box-shadow: 0 0 11px rgba(33,33,33,.2); 
            }
            .overlaytext {
                position: absolute;
                bottom: 0;
                background-color: black;
                background: rgba(0, 0, 0, 0.7);
                width: 100%;
                height: 15%;
                font-size: 17px;
                color: white;
                margin-top: 4%;
            }
            .footertitle {
                font-size:18px;
                padding-top: 10%;
            }
            .footerSubHeadings {
                font-size:13px;
                padding-top: 1%
            }
            .linktag {
                font-size:18px;
                color: grey
            }
            /*            .row > .featured {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        }*/
            .row > .zoom {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .footertext > .row {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            nav {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            /*STYLING THE LOGIN MODAL*/
            .modalSignin {
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.7);
                position:absolute;
                top:0;
                z-index: 2;
                display: flex;
                justify-content: center;
                align-items: center;
                display: none;
                position: fixed;

            }
            .modalRegister {
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0);
                position:absolute;
                top:0;
                z-index: 2;
                display: flex;
                justify-content: center;
                align-items: center;
                display: none;
                position: fixed;

            }
            .modal-content-signin {
                width: 350px;
                height: 400px;
                background-color: white;
                position: relative;
            }
            .modal-content-register {
                width: 350px;
                height: 450px;
                background-color: white;
                position: relative;
            }
            .close {
                position: absolute;
                top: 0;
                right: 14px;
                font-size: 42px;
                transform: rotate(45deg);
                cursor: pointer;
            }
            .closeRegister {
                position: absolute;
                top: 18px;
                right: 18px;
                font-size: 21px;
                /*transform: rotate(45deg);*/
                cursor: pointer;
            }
            .backRegister {
                position: absolute;
                top: 18px;
                left: 18px;
                font-size: 20px;
                /*                background-color:red;*/
                /*                transform: rotate(45deg);*/
                cursor: pointer;
            }
            i {
                color: whitesmoke;
            }
            i:hover {
                cursor: pointer;
                color: green;
                transition-duration: 0.5s;
            }
            .loginPopup {
                border-radius: 5px;
                background: transparent;
                border:0px;
                border-bottom: 1px solid grey;
                font-size: 14px;
                padding-bottom: 10px;
                height: 40px;
                margin-bottom: 10px;
                background: #f7f9fc;
            }
        </style>
        <div class="row rowAlign" style="margin-bottom:0px;padding-bottom: 0px;">
            <nav class="navbar navbar-inverse" style="height:55px;border-radius: 0px;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">PropKorner</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                          <!--<li><<i class="glyphicon glyphicon-user" id="loginButton" style="margin-top: 20px;margin-right: 20px;font-size:20px;"></i></li>-->
                            <li><a id="contactUs" style="cursor:pointer;"><span class="glyphicon glyphicon glyphicon-earphone"  id="contactUs"></span> Contact Us</a></li>
                            <li><a id="loginButton" style="cursor:pointer;"><span class="glyphicon glyphicon-log-in"  id="loginButton"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="modalSignin">
            <div class="modal-content-signin">
                <div class="close" style="color:black" >+</div>
                <div class="modalhead" style="font-size: 19px;color: green;text-align:center;margin-top: 50px;;">Sign In!</div>
                <hr style="margin-top:1%;background-color: lightcoral;height: 1.5px;border: none;" width="10%;">
                <form action="">
                    <center>
                        <input type="email" class="loginPopup" placeholder="Email id" size="32%"><br>
                        <input id="passkey" class="loginPopup" type="password" style="padding-bottom: 10px;margin-bottom: 5px;" placeholder="Password" size="32%"><br>
                        <div style="margin-bottom:15px;font-size: 13px;"><input type="checkbox" onclick="showPassword()">Show Password</div>
                        <button class="btn" style="width:247px;background-color: #81C784;border: 1px solid grey;height: 40px;margin-bottom: 10px;"><a href="" >Sign In</a></button>
                        <div>
                            <a href="#" style="color:red;margin-bottom: 8px;font-size: 13px;">Forgot Password?</a><br>
                            <a class="registerNewUser" href="#" style="color:green;font-size: 14px;">New User? Register!</a>
                        </div>
                    </center>
                </form>
            </div>
        </div>

        <div class="modalRegister">
            <div class="modal-content-register">
                <div class="backRegister glyphicon glyphicon-menu-left" style="color:grey" ></div>
                <div class="closeRegister glyphicon glyphicon-remove-circle" style="color:grey" ></div>
                <div class="modalhead" style="font-size: 19px;color: green;text-align:center;margin-top: 20px;;">Register!</div>
                <hr style="margin-top:1%;background-color: lightcoral;height: 1.5px;border: none;" width="10%;">
                <form action="">
                    <center>
                        <input type="text" class="loginPopup" placeholder="First Name" size="32%">
                        <input type="text" class="loginPopup" placeholder="Last Name" size="32%">
                        <input type="email" class="loginPopup" placeholder="Email" size="32%"><br>
                        <input id="passkey" class="loginPopup" type="password" placeholder="Password" size="32%">
                        <input id="passkey" class="loginPopup" type="password" style="padding-bottom: 15px;margin-bottom: 20px;" placeholder="Confirm Password" size="32%"><br>

                        <button class="btn" style="width:247px;background-color: #81C784;border: 1px solid grey;height: 40px;margin-bottom: 8px;"><a href="" >Register</a></button>
                        <div>
                            <a class="alreadyHaveAccount" href="#" style="color:red;margin-bottom: 15px;font-size: 13px;color: rosybrown">Already have an account? Sign in!</a><br>

                        </div>
                    </center>
                </form>
            </div>
        </div>


            <script>
//              

//                FOR LOGIN POP-UP
                document.getElementById('loginButton').addEventListener('click', function () {
                    document.querySelector('.modalSignin').style.display = 'flex';
                });

                document.querySelector('.close').addEventListener('click', function () {
                    document.querySelector('.modalSignin').style.display = 'none';
                });

                document.querySelector('.registerNewUser').addEventListener('click', function () {
                    document.querySelector('.modalRegister').style.display = 'flex';
                });
                document.querySelector('.backRegister').addEventListener('click', function () {
                    document.querySelector('.modalRegister').style.display = 'none';
                });
                document.querySelector('.alreadyHaveAccount').addEventListener('click', function () {
                    document.querySelector('.modalRegister').style.display = 'none';
                });
                document.querySelector('.closeRegister').addEventListener('click', function () {
                    document.querySelector('.modalRegister').style.display = 'none';
                    document.querySelector('.modalSignin').style.display = 'none';
                });
                function showPassword() {
                    var x = document.getElementById("passkey");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
    </body>
</html>
