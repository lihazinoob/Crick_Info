<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Connect the css file -->
      <link rel="stylesheet" href="{{ asset('cssfiles/homepage.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRICKINFO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav__data">
                <a href="#" class="nav__logo">
                   <i class="ri-planet-line"></i> CrickInfo
                </a>
              </div>
              <div class="nav_items">
                <a href="#">Iconic Moments</a>
                <a href="#">Discover</a>
                <a href="#">Teams</a>
              </div>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
               <!-- Add an image -->
               <!-- <img src="{{ asset('image/Virat_Kohli.jpg') }}"> -->

                <!-- <img src="image/Virat_Kohli.jpg"> -->
                <div class="content">
                    <div class="author">INDIA</div>
                    <div class="title">GREAT</div>
                    <div class="topic">VIRAT KOHLI</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium? -->
                        Virat Kohli is in now in the Greatest of all time.    
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="author">INDIA</div>
                    <div class="title">GREAT</div>
                    <div class="topic">VIRAT KOHLI</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium? -->
                        Virat Kohli is in now in the Greatest of all time.    
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="author">INDIA</div>
                    <div class="title">GREAT</div>
                    <div class="topic">VIRAT KOHLI</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium? -->
                        Virat Kohli is in now in the Greatest of all time.    
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="author">INDIA</div>
                    <div class="title">GREAT</div>
                    <div class="topic">VIRAT KOHLI</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium? -->
                        Virat Kohli is in now in the Greatest of all time.    
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="title">
                        GREAT
                    </div>
                    <div class="description">
                        VIRAT KOHLI
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="title">
                        GREAT
                    </div>
                    <div class="description">
                        VIRAT KOHLI
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="title">
                        GREAT
                    </div>
                    <div class="description">
                        VIRAT KOHLI
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/Virat_Kohli.jpg">
                <div class="content">
                    <div class="title">
                        GREAT
                    </div>
                    <div class="description">
                        VIRAT KOHLI
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
   <!-- Link the JS file -->
      <script src="{{ asset('jsfiles/homepage.js') }}"></script>
    <!-- <script src="app.js"></script> -->
</body>
</html>