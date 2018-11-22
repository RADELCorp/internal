<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
        <title>PropKorner - Contact</title>
        <style>
            .table
            {
                color:red;
                margin-left:1000px;
            }
            .font-bold
            {
                font-weight: bold;
            }
            .space
            {
                margin-top: 20px;  
            }
            .map
            {
                border:0;
                height:300px;
                width:100%;
            }
            .address
            {
                background-color:rgb(219, 219, 219);
                height: 300px;
                text-align: center;
            }
            .address-p
            {
                padding-top: 15px;
                text-align: left; 
                margin-left: 50px; 
            }
            .map-div
            {
                height:300px; 
                padding-right:0;
            }
            .parent
            {
                font-family: 'Saira', sans-serif;
                margin-top: 20px;
            }
            .main
            {
                height: 90px; 
                background-color: rgb(54,34,33);
            }
            .head-img
            {
                background-image:url(images/imgContact.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 300px;
                margin-bottom: 10px;
                background-position:center
            }
            .footer
            {
                background-color:rgb(219, 219, 219);
                height:300px; 
                margin-top:30px;
                font-family:'Saira', sans-serif;
            }
            .footer-div
            {
                height: 300px;
            }
            .contact-me
            {
                height: 300px;
                margin-bottom:10px;
                padding:0; 
            }
            .customer-form
            {
                height:300px;
                background-color:rgb(219, 219, 219);
                font-family:'Saira', sans-serif;
            }
            .list-type
            {
                list-style-type:none;
            }
            .info
            {
                height: 200px;
                width: 49%;
            }
            .customer
            {
                height:300px;
                padding:0;  
            }
            .formtext
            {
                width: 500px;
            }
            .tableform
            {
                width:100%;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <table class="table" border="1">
                <tr>
                    <th>RADEL CORP</th>
                    <th>LOGIN/REGISTER</th>
                    <th>Logo</th>
                </tr>
            </table>
        </div>
        <div style="align-content: center">
            <h1 style="text-align: center;">CONTACT US</h1></div>
        <div id="parent" class="parent col-md-12">

            <div class="head-img col-md-12" id="head-img"></div>

            <div class="contact-me col-md-12" id="contact-me">

                <div class="address col-md-4">
                    <br/><br/><b>Reach Us</b
                    <br/>
                    <p class="address-p">
                        608, 10th Main Rd, 4th T Block East,<br/> 
                        4th Block, Jayanagar, Bengaluru,<br/> 
                        Karnataka 560011<br/>
                        Email: popkorner@radelcorp.in<br/>
                        phone:
                        7733220044
                    </p>
                </div>
                <div  class="col-md-8">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.676531213553!2d77.58313651477012!3d12.928499590884138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159787bab1eb%3A0xbd9499bec26c769!2sRADEL+CORP!5e0!3m2!1sen!2sin!4v1542281628249" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div id="customer"class="customer col-md-12" >
                <div class="customer-form col-md-6">
                    <div class="space">
                        <table class="tableform">
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" class="formtext form-control" id="usrname" placeholder="Enter Name" name="usrname"></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" class="formtext form-control" id="usremail" placeholder="Enter Email" name="usremail"></td>
                            </tr>
                            <tr>
                                <td>Message:</td>
                                <td><textarea class="formtext form-control" rows="5" id="comment"></textarea></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-default" >Sent</button>
                    </div>
                </div>
                <div class="info col-md-6">
                    <b> Some information</b>
                </div>
            </div>
        </div>
        <div class="footer col-md-12">
            <div class="footer-div col-md-3">
                <ul class="list-type">
                    <li><h5 class="font-bold">EXPLORE</h5></li>
                    <li>HOME</li>
                    <li>ABOUT US</li>
                    <li>CAREERS</li>
                    <li>BLOGS</li>
                </ul>
            </div>
            <div class="footer-div col-md-3">
                <h5 class="font-bold">VISIT</h5>
                <p>No.2,Ground Floor<br/>
                    29th Main Road,<br/>
                    Kuvempu Nagar,<br/>
                    BTM Layout 2nd,<br/>
                    Stage Bengaluru,<br/>
                    Karnataka 560076
                </p>
            </div>
            <div class="footer-div col-md-3">
                <h5 class="font-bold">CONTACT US</h5>
                <p>+91-8945897598<br/>
                    +91-8945687598<br/>
                    vbcghw@gmail.com
                </p>
            </div>
            <div class="footer-div col-md-3">
                <ul class="list-type">
                    <li><h5 class="font-bold">FOLLOW US</h5></li>
                    <li>INSTAGRAM</li>
                    <li>TWITTER</li>
                    <li>FACEBOOK</li>
                    <li>GOOGLE+</li>
                </ul>
            </div>
        </div>
    </body>
</html>