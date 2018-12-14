<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Prop Korner : Search</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            .navigation-clean-button{
                background:#212121;
                padding-top:6px;
                padding-bottom:10px;
                color:whitesmoke;
                border-radius:0;
                box-shadow:none;
                border:0;
                margin-bottom:0;
            }

            .navigation-clean-button .navbar-brand{
                font-weight:bold;
                color:inherit;
            }
            .navigation-clean-button .navbar-brand:hover{
                color:#9E9E9E;
            }
            body {
                font-family: 'Raleway', sans-serif;
                background-color: whitesmoke;
            }
            .footertitle {
                font-size:18px;
                padding-top: 10%;
            }
            .footertext > .row {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .footertext {
                color: white;
                font-family: 'Raleway', sans-serif;
            }
            .row + .rowAlign {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .footerSubHeadings {
                font-size:13px;
                padding-top: 1%
            }
            .rowAlign {
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 20px;
            }
            .footertext > .row {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .social {
                color:#ffffff;
            }
            .overlaytext {
                position: absolute;
                bottom: 0% ;
                left: 0%;
                text-align: center;
                background-color: whitesmoke;
                background: rgba(238, 238, 238, 0.8);
                width: 100%;
                height: 18%;
                font-size: 17px;
                color: black;        //Darshan's code
            }
            .feat{
                margin-bottom: 2%;
                background-repeat: no-repeat;
                background-size: cover;
                height:250px;
                width: 28%;
                margin-right: 3%
            }
            .filters:hover{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                background-repeat: no-repeat;
                background-size: cover;
                border: 2px solid white;
                height: 250px;   //Darshan's code
            }
            #custom-search-input{
                padding: 3px;
                border: solid 1px #E4E4E4;
                border-radius: 6px;
                background-color: #fff;
            }

            #custom-search-input input{
                border: 0;
                box-shadow: none;
            }

            #custom-search-input button{
                margin: 2px 0 0 0;
                background: none;
                box-shadow: none;
                border: 0;
                color: #666666;
                padding: 0 8px 0 10px;
                border-left: solid 1px #ccc;
            }

            #custom-search-input button:hover{
                border: 0;
                box-shadow: none;
                border-left: solid 1px #ccc;
            }

            #custom-search-input .glyphicon-search{
                font-size: 23px;
            }
            .placeholder-control::placeholder {
                color: grey;
                font-size: 13px;
            }
            .overlay0 {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.7);
                overflow: hidden;
                width: 100%;
                height: 15%;
                transition: .3s;
            }

            .container:hover .overlay0 {
                height: 55%;
            }
            .overlay1 {
                position: absolute;
                bottom: 15%;
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.8);
                overflow: hidden;
                width: 100%;
                height: 10%;
                transition: 0.3s;
            }

            .container:hover .overlay1 {
                bottom: 55%;
            }

        </style>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-default navigation-clean-button"style="height:60px">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" style="font-size: 24px" href="#">Prop Korner</a>
                    </div>
                    <div class="navbar-right">
                        <div class="col-md-10" style="margin-top:4.5%">
                            <div class="row">
                                <div class="row col-md-4" style="margin-left:17%">
                                    <h6>Bangalore</h6>
                                </div>
                                <div class="col-md-6">
                                    <span><a class="btn glyphicon glyphicon-chevron-down" href="#" style="color:whitesmoke"></a></span>
                                </div>
                                <div class="col-md-1"style="margin-left:-30%; margin-top: -3%">
                                    <a class="btn glyphicon glyphicon-earphone" href="#" style="color:whitesmoke; font-size: 20px;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="login col-md-2" style="margin-top:2%;margin-left: -13%">
                            <a class="navbar-right btn glyphicon glyphicon-user" style="font-size: 20px; color: whitesmoke" role="button" href="#"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-left: 19%; margin-top: 2%; margin-bottom: 2.5%">
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg placeholder-control" placeholder="Apartments, Place.." />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="button">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="row col-md-1" style="margin-top:3%; margin-left: 5%">
                            <h5>Sort :</h5>
                        </div>
                        <button class="btn btn-primary dropdown-toggle" style="margin-top:3%;margin-left: -2%" type="button" data-toggle="dropdown">Relevance
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="margin-left:79%">
                            <li><a href="#">Distance</a></li>
                            <li><a href="#">Price: Low to High</a></li>
                            <li><a href="#">Price: High to Low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 filters" style="background-color: #EEEEEE;margin-left: 4%;margin-right: 4%;height:600px; text-align: center   ">
        <h3><u>FILTERS</u></h3>
        <h4 style="text-align:left; margin-top: 15%">
            BHK
        </h4>
        <div class="row" style="margin-left: -80%">
            <div><label><input type="checkbox" value=""> 1</label></div>
            <div><label><input type="checkbox" value=""> 2</label></div>
            <div><label><input type="checkbox" value=""> 3</label> </div>
            <div><label><input type="checkbox" value=""> 4</label></div>
            <div><label><input type="checkbox" value=""> 4+</label></div>
        </div>

    </div>
    <div class="row col-md-offset-3">
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/1.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 1,50,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/2.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">2 BHK, 2500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(images/3.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 85,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">3 BHK, 3200sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/4.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 2,50,00,000</div>
                        <div style="display: inline-block;margin-left: 80px;">4 BHK, 5000sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/5.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(images/1.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(images/2.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/1.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
      <div>
            <div class="container feat col-md-2" style="background-image: url(images/4.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(images/5.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="container feat col-md-2" style="background-image: url(images/3.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
       <div>
            <div class="container feat col-md-2" style="background-image: url(images/4.jpg)">
                <div class="overlay1">
                    <div style="font-size:16px;text-align: center;"><b>Lorem Ipsum</b></div>
                </div>
                <div class="overlay0">
                    <div style="color:white;float: left;font-size: 14px;">
                        <div style="display: inline-block;padding-left: 8px; padding-top: 10px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                        <div style="display: inline-block;margin-left: 85px;">3 BHK, 4500sqft.</div>
                        <div style="display: inline-block;padding-top: 10px;padding-left: 15px;font-size: 12px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                        <div style="display: inline-block;padding-left: 40px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <nav aria-label="..." style="text-align:center">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <div class="footertext">
        <div class="row rowAlign">
            <div class="col-md-12 col-sm-12" style="background-color:black;height: 350px;">
                <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                    <p class="footertitle"><b>EXPLORE</b></p>
                    <hr style="margin-top:1%" width="15%;" align="left">
                    <div class="footerSubHeadings">
                        <p>HOME</p>
                        <p>ABOUT US</p>
                        <p>CAREER</p>
                        <p>BLOGS</p>
                    </div></div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                    <p class="footertitle"><b>VISIT</b></p>
                    <hr style="margin-top:1%" width="15%;" align="left">
                    <p class="footerSubHeadings"> No 2, Ground floor,<br> 29th Main Road,<br> Kuvempu Nagar,<br> BTM Layout 2nd Stage,<br> Bengaluru,<br> Karnataka 560076</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                    <p class="footertitle"><b>CONTACT US</b></p>
                    <hr style="margin-top:1%" width="15%;" align="left">
                    <div class="footerSubHeadings">
                        <p>+91-8945687598</p>
                        <p>+91-8945687598</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="height: 70%;padding-left: 8%">
                    <p class="footertitle"><b>FOLLOW</b></p>
                    <hr style="margin-top:1%" width="15%;" align="left">
                    <div class="footerSubHeadings">
                        <p><a href="#" class="social">INSTAGRAM </a></p>
                        <p><a href="#" class="social">TWITTER </a></p>
                        <p><a href="#" class="social">GOOGLE+ </a></p>
                        <p><a href="#" class="social">FACEBOOK </a></p>
                    </div>
                </div>
                <hr style="margin-top:1%" width="95%;">
                <div class="col-md-6 col-sm-6 col-xs-6" style="height: 30%;padding-left: 8%;">
                    <p class="footertitle" style="padding-top:2%">2018. All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6" style="height: 30%;padding-right: 8%;">
                    <p class="footertitle" style="text-align: right;padding-top: 2%">RADEL CORP.</p>
                </div>
            </div>  <!-- Darshan's footer code -->
        </div>
</body>