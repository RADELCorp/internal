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
        </style>
    </head>
    <body>


        <div class="container">
            <img src="images/1.jpg" alt="Avatar" class="image">
            <div class="overlay1">
                <div style="font-size:16px;text-align: center;"><b>Some Random Text regarding this particular flat</b></div>
            </div>
            <div class="overlay">
                <!--                <div class="text" style="color: #E0E0E0;text-align: center;padding-top: 0px;font-size: 15px;">Some Random Text regarding this particular flat</div>-->
                <!--                <div style="color: green;padding-top: 1px;font-size: 15px;">
                                    <span style="color:#E0E0E0;text-align: left;">
                                        
                                           &#x20b9; 33,00,000
                                    </span>
                                    <span style="color:#E0E0E0;right: 0;">
                                        
                                            3BHK 5700Sqft
                                    </span>
                                </div>-->
                <div style="color:white;float: left;font-size: 18px;">
                    <div style="display: inline-block;padding-left: 15px;padding-top: 15px;"><span style="color:green">&#x20b9;</span> 33,00,000</div>
                    <div style="display: inline-block;padding-left: 140px;">3BHK, 4500sqft.</div>
                    <div style="display: inline-block;padding-top: 14px;padding-left: 15px;font-size: 14px;width: 50%;">608, 10th Main Rd, 4th T Block East, 4th Block, Jayanagar, Bengaluru, Karnataka 560011</div>
                    <div style="display: inline-block;padding-left: 70px;font-size: 15px;"><a href="#" style="color: white;">view details...</a></div>
                </div>
            </div>

        </div>

    </body>
</html>
