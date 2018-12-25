<html>
    <head>
        <title>Construct Me</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    </head>
    <style type="text/css">
        body{
            font-family: 'Roboto', sans-serif;
        }
        #create-button{
            background-color: #038930;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            border: none;
            padding: 5px;
            padding-left: 25px;
            padding-right: 25px;
        }
        #create-button:hover{
            cursor: pointer;
            background-color: #21ad50;
        }
        #project-container-parent{
            /*            font-family: Raleway;*/
            padding-left: 60px;
            padding-right: 60px;
        }
        #project-container{
            float: none;
            margin: auto;
            padding-top: 15px;
        }
        .project-name{
            font-size: 22px;
            text-align: center;
            text-transform: uppercase;
            /*font-weight: bold;*/
        }
        .project-tile-container{
            padding: 10px;
        }
        .project-tile{
            height: 35vh;       
            overflow: hidden;
            position: relative;
            padding: 5px;
            padding-left: 15px;
            padding-right: 10px;
            transition: all 0.3s;
            opacity: 0.9;
            border: 2px solid white;
        }
        .project-tile:hover{
            cursor: pointer;
            box-shadow: 0px 5px 10px 0px #666;
            opacity: 1;
        }
        .project-tile-container:nth-child(1n) .project-tile{
            background-color: rgb(225,225,225);
            color: black; 
        }
        .project-tile-container:nth-child(2n) .project-tile{
            background-color: rgb(225,225,225);
            color: black;
        }
        .project-tile-container:nth-child(3) .project-tile{
            background-color: rgb(225,225,225);
            color: black; 
        }
        .project-tile-container:nth-child(5n) .project-tile{
            background-color: rgb(225,225,225);
            color: black; 
        }
        .project-tile-container:nth-child(4n) .project-tile{
            background-color: rgb(225,225,225);
            color: black; 
        }
        .project-tile-background{
            background-repeat: no-repeat;
            background-size: 50%;
            background-color:rgba(0, 0, 0, 0.5);
            background-position: right bottom;
        }
        .col-md-12 {
            background-color: rgb(225,225,225);
        }
        .paragraph{
            font-family: Roboto;
            font-size: 14px;
            padding: 21px;
            width: 85%;
            margin: auto;
        }
    </style>
    <body>
        <div class="col-md-12" style="box-shadow: 0px 0px 2px 0px grey;margin-bottom:20px;padding-bottom: 90px;padding-top: 15px;">            
            <div id="project-container-parent">
                <h2>Welcome to Construct<span style="color:red;">Me</span></h2>
                <div id="project-container">
                    <div class="col-lg-4 col-md-6 project-tile-container">

                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">Create Project</h4>
                                <center>
                                    <img class="image" src="images/1.png" style="width: 22%;">
                                </center>
                                <div class="paragraph">
                                    Create a new project file and then get your project going. Set the start date, project title, add tasks, and show the project summary task.
                                </div>
                            </div>
                 
                    </div>
                    <div class="col-lg-4 col-md-6 project-tile-container">
                        
                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">Project list</h4>
                                <center>
                                    <img class="image" src="images/3.png" style="width: 22%;">
                                </center>
                                <div class="paragraph">
                                    A list of all of the program's projects and activities that together will deliver the required 'future state' described in the Blueprint.
                                </div>
                            </div>
                      
                    </div>
                    <div class="col-lg-4 col-md-6 project-tile-container">
                      
                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">Enquiry Page</h4>
                                <center>
                                    <img class="image" src="images/enquiry.png" style="width: 20%;">
                                </center>
                                <div class="paragraph">
                                    Have got any doubts? Enquire about the Subcontractor Works, Material Enquiry & Services and get started. 
                                </div>
                            </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-6 project-tile-container">
                        
                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">My Profile</h4>
                                <center>
                                    <img class="image" src="images/2.png" style="width: 20%;">
                                </center>
                                <div class="paragraph">
                                    
                                </div>
                            </div>
                        
                    </div>

                    <div class="col-lg-4 col-md-6 project-tile-container">
                      
                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">Create Project</h4>
                                <center>
                                    <img class="image" src="images/1.png" style="width: 20%;">
                                </center>
                                <div class="paragraph">
                                    Create a new project file and then get your project going. Set the start date, project title, add tasks, and show the project summary task.
                                </div>
                            </div>
                      
                    </div>
                    <div class="col-lg-4 col-md-6 project-tile-container">
                       
                            <div class="project-tile project-tile-background">
                                <h4 class="project-name">Settings</h4>
                                <center>
                                    <img class="image" src="images/settings.png" style="width: 20%;">
                                </center>
                                <div class="paragraph">
                                    Create a new project file and then get your project going. Set the start date, project title, add tasks, and show the project summary task.
                                </div>
                            </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>