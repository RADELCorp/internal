<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;

        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: white;
            height: 10px;
            color: white;
        }

        
    </style>
    <body>

        <div id="myModal" class="modal" style="padding-top:40px;">
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <img src="images/11.jpg" style="width:100%;height: 450px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <img src="images/12.jpg" style="width:100%;height: 450px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <img src="images/13.jpg" style="width:100%;height: 450px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <img src="images/14.jpg" style="width:100%;height: 450px;">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                   
                </div>


                <div class="column">
                    <img class="demo cursor" src="images/11.jpg" style="width:100%;height:150px;padding: 10px;" onclick="currentSlide(1)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/12.jpg" style="width:100%;height:150px;padding: 10px;" onclick="currentSlide(2)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/13.jpg" style="width:100%;height:150px;padding: 10px;" onclick="currentSlide(3)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/14.jpg" style="width:100%;height:150px;padding: 10px;" onclick="currentSlide(4)">
                </div>
            </div>

            <script>

                var slideIndex = 3;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>

    </body>
</html>
