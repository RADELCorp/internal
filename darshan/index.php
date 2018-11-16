<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
                font-family: 'Saira Extra Condensed', sans-serif;
            }
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
                padding-top: 120px;
            }
            
            
        </style>
        <div class="nav" style="background-color: black; opacity: 0.8;">
            <center><h3>Header</h3></center>
        </div>
        <div class="row shadow">
            <div class="col-md-12" style="background-color:#EEEEEE;height: 350px;">
                <center>
                    <p class="header">
                        <a href="#">For Sale </a>/
                        <a href="#">For Rent</a>
                        <br>
                        <button class="btn">Search By</button>
                        <input class="search" type="texbox" placeholder="Locality, Pincode, Name etc." size="60">
                    </p>
                </center>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/1.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/2.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/3.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/4.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
        </div>

        <div class="row" style="margin-top: 5px">
            <div class="col-md-6 shadow" style="height: 350px;background-image:url(images/5.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/6.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-3 shadow" style="height: 350px;background-image:url(images/2.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
        </div>

        <div style="padding-top:20px;">
            <center>
                <h4 style="padding-top:50px;">OUR LISTINGS</h4>
            </center>
        </div>
        <div class="row" style="margin-top: 40px;text-align: center">
            <div class="col-md-1" style="background-color:white;height: 350px;margin-right: 5px"></div>
            <div class="col-md-2 shadow" style="height: 350px;background-image:url(images/apartments.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;">

            </div>
            <div class="col-md-2 shadow" style="padding-left: 0px;height: 350px;background-image:url(images/villa.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;position: relative">
                <div style="position: absolute;bottom: 0;background-color: black;background: rgba(76, 175, 80, 0.8);width: 100%;"><p style="font-weight: bold; font-size: 17px;">Apartments</p></div>
            </div>
            <div class="col-md-2 shadow" style="height: 350px;background-image:url(images/plot.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-2 shadow" style="height: 350px;background-image:url(images/officespaces.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
            <div class="col-md-2 shadow" style="height: 350px;background-image:url(images/more.jpg);background-repeat: no-repeat;background-size: cover;border: 2px solid white;"></div>
        </div>
        <div class="footer" style="margin-top:100px; padding-bottom: 100px; background-color: black; opacity: 0.8;">
            <center><h1 style="padding-top: 30px">Footer</h1></center>
        </div>



    </body>
</html>
