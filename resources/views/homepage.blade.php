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
                <a href="{{url('/discover')}}">Discover</a>
                <a href="#">Teams</a>
              </div>
        </nav>
    </header>

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            
            @foreach($iconicmoments as $iconicmoment) 
            <div class="item">
                <!-- use asset to add image -->
                <img src="{{ asset('iconicmoments/'.$iconicmoment->image) }}">
                
                <div class="content">
                    <div class="author">{{$iconicmoment->author}}</div>
                    <div class="title">{{$iconicmoment->title}}</div>
                    <div class="topic">{{$iconicmoment->topic}}</div>
                    <div class="des">
                        
                        {{$iconicmoment->description}}
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                    </div>
                </div>
            </div>
            @endforeach
            
            
            
            
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            @foreach($iconicmoments as $iconicmoment)
            <div class="item">
            <img src="{{ asset('iconicmoments/'.$iconicmoment->image) }}">
                <div class="content">
                <div class="title">{{$iconicmoment->title}}</div>

                <div class="des">
                        
                        {{$iconicmoment->author}}
                    </div>
                </div>
            </div>
            @endforeach
            
            
            
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