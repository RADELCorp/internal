<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <style>
            body {
                font-family: 'Marvel', sans-serif;
            }
            .container {
                position: relative;
                height: 233px;
                width: 350px;
                border: 2px solid white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin-bottom: 10px;
            }

            .image {
                display: block;
                width: 100%;
                height: auto;
            }

            .overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.7);
                overflow: hidden;
                width: 100%;
                height: 23%;
                transition: .3s;
            }

            .container:hover .overlay {
                height: 50%;
            }
            .overlay1 {
                position: absolute;
                bottom: 23%;
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.9);
                overflow: hidden;
                width: 100%;
                height: 10%;
                transition: 0.3s;
            }

            .container:hover .overlay1 {
                bottom: 50%;
            }
            .thumbnail-details{
                display: inline-block;padding-left: 40px;
            }
            .onhover-submenu{
                display: inline-block;padding-top: 15px;font-size: 14px;width: 23%;text-align: center;
            }
        </style>
    </head>
    <body>

        <div style="display:inline-block;float: left">
        <div class="container">
            <img src="images/11.jpg" alt="Avatar" class="image">
            <div class="overlay1">
                <div style="font-size:16px;text-align: center;"><b>Some Random Text regarding this particular flat</b></div>
            </div>
            <div class="overlay">
                <div style="color:white;float: left;font-size: 18px;">
                    <div style="display: inline-block;padding-left: 15px;padding-top: 15px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                    <div class="thumbnail-details">Jayanagar</div>
                    <div class="thumbnail-details">Contact Us</div>
                    <div class="onhover-submenu">Area<br>1080Sqft</div>
                    <div class="onhover-submenu">BHK<br>4</div>
                    <div class="onhover-submenu">Bathrooms<br>3</div>
                    <div class="onhover-submenu">Parking<br>YES</div>
                </div>
            </div>
        </div>
<!--        <div class="container">
            <img src="images/2.jpg" alt="Avatar" class="image">
            <div class="overlay1">
                <div style="font-size:16px;text-align: center;"><b>Some Random Text regarding this particular flat</b></div>
            </div>
            <div class="overlay">
                <div style="color:white;float: left;font-size: 18px;">
                    <div style="display: inline-block;padding-left: 15px;padding-top: 15px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                    <div style="display: inline-block;padding-left: 140px;">3BHK, 4500sqft.</div>
                    <div style="display: inline-block;padding-top: 15px;padding-left: 15px;font-size: 14px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                    <div style="display: inline-block;padding-left: 70px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                </div>
            </div>

        </div>
        <div class="container">
            <img src="images/3.jpg" alt="Avatar" class="image">
            <div class="overlay1">
                <div style="font-size:16px;text-align: center;"><b>Some Random Text regarding this particular flat</b></div>
            </div>
            <div class="overlay">
                <div style="color:white;float: left;font-size: 18px;"> 
                    <div style="display: inline-block;padding-left: 15px;padding-top: 15px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                    <div style="display: inline-block;padding-left: 140px;">3BHK, 4500sqft.</div>
                    <div style="display: inline-block;padding-top: 15px;padding-left: 15px;font-size: 14px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                    <div style="display: inline-block;padding-left: 70px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                </div>
            </div>

        </div>-->
        </div>
    </body>
</html>
