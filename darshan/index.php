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
                background-color: #ECEFF;
            }
            a { color:#000000;
            }
            /*            SHADOW_FOR_TILES*/
            .shadow {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .row {
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

            .header {
                padding-top: 40px;
            }

            /*            ANIMATION_FOR_OUR_LISTING*/
            .zoom {
                background-color: green;
                transition: transform .2s;
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

            /*            HEIGHT_DEFINED_FOR_GRID*/
            .col-lg-6 {
                height: 250px;
            }
            .col-lg-3 {
                height: 250px;
            }
            .col-md-6 {
                height: 250px;
            }
            .col-md-3 {
                height: 250px;
            }
            /*            .col-sm-3 {
                            height: 150px;
                        }
                        .col-sm-6 {
                            height: 150px;
                        }
                        .col-xs-3 {
                            height: 100px;
                        }
                        .col-xs-6 {
                            height: 100px;
                        }*/
            .footer {
                color: white
            }

            /*            PLACEHOLDER_COLOR_CHANGE*/
            ::-webkit-input-placeholder { 
                color: #fff;
                text-transform: uppercase;
            }

            /*            SEARCH_BUTTON_STYLING*/
            .btn {
                background-color: #4CAF50;
            }
            button {
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }

            button:hover {
                background-color: #2E7D32; /* Green */
                color: white;
            }
        </style>
        <div class="row">
            <div class="col-lg-12 shadow" style="background-color:black;height: 70px;">
                <center><h2>PropKorner Header</h2></center>
            </div>
        </div>
        <div class="row shadow">
            <div class="col-md-12" style="background: rgba(0, 0, 0, 0.5);height: 175px;padding-left: 0px;padding-right: 0px;">

                <div class="col-md-5" style="height: 100%;">
                    <center>
                        <p class="header" style="color:black;">
                            <a href="#" style="font-size:18px;"><b>For Sale </b></a>/
                            <a href="#" style="font-size:18px;"><b>For Rent</b></a>
                            <br>
                            <input class="search" type="texbox" style="background: transparent; border: 1px solid #fff;font-size: 14px;" placeholder="Locality, Pincode, Name etc." size="42%">
                            <button class="btn">Search</button>
                            <br>
                            <span id="typed" style="white-space:pre;font-size: 20px;color: white" class="typed">
                            </span>
                        </p>
                    </center>
                </div>

                <div class="col-md-7" style="height: 100%;">
                    <center>
                        dfsdf
                    </center>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/1.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/2.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/3.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/4.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
        </div>

        <div class="row" style="margin-top: 5px">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 shadow" style="background-image:url(images/5.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/6.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 shadow" style="background-image:url(images/2.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
        </div>

        <div style="padding-top:20px;">
            <center>
                <h4 style="padding-top:50px; font-size: 27px">OUR LISTINGS</h4>
            </center>
        </div>
        <div class="row row-centered" style="margin-top: 40px;text-align: center">

            <div class="col-md-2 col-sm-4 col-xs-6 zoom shadow col-centered" style="padding-left: 0px;height: 350px;background-image:url(images/apartments.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;">
                <div style="position: absolute;bottom: 0;background-color: black;background: rgba(0, 0, 0, 0.7);width: 100%;height: 15%;"><p style="font-size: 17px;color: white;margin-top: 4%;">Apartments</p></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 zoom shadow col-centered" style="padding-left: 0px;height: 350px;background-image:url(images/villa.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;position: relative">
                <div style="position: absolute;bottom: 0;background-color: black;background: rgba(0, 0, 0, 0.7);width: 100%;height: 15%;"><p style="font-size: 17px;color: white;margin-top: 4%;">Villas</p></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 zoom shadow col-centered" style="padding-left: 0px;height: 350px;background-image:url(images/plot.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;">
                <div style="position: absolute;bottom: 0;background-color: black;background: rgba(0, 0, 0, 0.7);width: 100%;height: 15%;"><p style="font-size: 17px;color: white;margin-top: 4%;">Plots</p></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 zoom shadow col-centered" style="padding-left: 0px;height: 350px;background-image:url(images/officespaces.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;">
                <div style="position: absolute;bottom: 0;background-color: black;background: rgba(0, 0, 0, 0.7);width: 100%;height: 15%;"><p style="font-size: 17px;color: white;margin-top: 4%;">Office  Spaces</p></div>
            </div>
            <div class="col-md-2 col-sm-8 col-xs-6 zoom shadow col-centered" style="padding-left: 0px;height: 350px;background-image:url(images/more.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;">
                <div style="position: absolute;height: 100%;background-color: black;background: rgba(0, 0, 0, 0.6);width: 100%;height: 100%;"><p style="font-size: 27px;color: white;margin-top: 50%">More<hr width="15%"></p></div>
            </div>

        </div>
        <div class="footer">
            <div class="row shadow">
                <div class="col-md-12 col-sm-12" style="background-color:black;height: 350px;">
                    <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                        <p style="font-size:23px;padding-top: 10%;"><b>EXPLORE</b></p>
                        <hr style="margin-top:1%" width="15%;" align="left">
                        <p style="font-size:16px;padding-top: 1%">HOME</p>
                        <p style="font-size:16px;padding-top: 1%">ABOUT US</p>
                        <p style="font-size:16px;padding-top: 1%">CAREER</p>
                        <p style="font-size:16px;padding-top: 1%">BLOGS</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                        <p style="font-size:23px;padding-top: 10%"><b>VISIT</b></p>
                        <hr style="margin-top:1%" width="15%;" align="left">
                        <p style="font-size:16px;padding-top: 1%"> No 2, Ground floor,<br> 29th Main Road,<br> Kuvempu Nagar,<br> BTM Layout 2nd Stage,<br> Bengaluru,<br> Karnataka 560076</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                        <p style="font-size:23px;padding-top: 10%"><b>CONTACT US</b></p>
                        <hr style="margin-top:1%" width="15%;" align="left">
                        <p style="font-size:16px;padding-top: 1%">+91-8945687598</p>
                        <p style="font-size:16px;padding-top: 1%">+91-8945687598</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                        <p style="font-size:23px;padding-top: 10%"><b>FOLLOW</b></p>
                        <hr style="margin-top:1%" width="15%;" align="left">
                        <p style="font-size:16px;padding-top: 1%"><a href="#">INSTAGRAM </a></p>
                        <p style="font-size:16px;padding-top: 1%"><a href="#">TWITTER </a></p>
                        <p style="font-size:16px;padding-top: 1%"><a href="#">GOOGLE+ </a></p>
                        <p style="font-size:16px;padding-top: 1%"><a href="#">FACEBOOK </a></p>
                    </div>
                    <hr style="margin-top:1%" width="95%;">
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 30%;padding-left: 8%;">
                        <p style="font-size:21px;padding-top: 2%;"><b>2018. All Rights Reserved</b></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="height: 30%;padding-right: 8%;">
                        <p style="font-size:21px;padding-top: 2%;text-align: right"><b>RADEL CORP.</b></p>
                    </div>
                </div>
            </div>




            <script  src="script/script.js"></script>
    </body>
</html>
