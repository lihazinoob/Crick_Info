<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <!-- Use asset to link css -->
    <link rel="stylesheet" href="{{ asset('cssfiles/adminpanel.css') }}">

    <title>AdminHub</title>
</head>

<body>


    <section id="sidebar">
        <a href="/adminpanel" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="/create" onclick="showForm('iconic-moment-form')">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Create Iconic Moments</span>
                </a>
            </li>
            <li>
                <a href="/listoficonicmoments" onclick="showForm('list-of-iconic-moment-form')">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Iconic Moments</span>
                </a>
            </li>
            <li>
                <a href="/createIntlteams" onclick="showForm('player-create-form')">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Create an International Team</span>
                </a>
            </li>
            <li>
                <a href="/listofIntlteams">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">International Teams</span>
                </a>
            </li>


            <li>
                <a href="createplayers">
                    <i class='bx bxs-group'></i>
                    <span class="text">Create a Player</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Update a Player</span>
                </a>
            </li>
            <li>
                <a href="/createStadium">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Create a Stadium</span>
                </a>
            </li>
            <li>
                <a href="/listofstadiums">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Stadiums</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">

            <li>
                <a href="/logout" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <!-- <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden>
      <label for="switch-mode" class="switch-mode"></label> -->

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <!-- Form of creating iconic moments -->

            <div class="icon form-container" id="iconic-moment-form">
                <form action="/storeiconic" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <h1>Submit Your Image</h1>
                        <form action="submit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" id="image" name="image" accept="image/*" required value="{{old('image')}}">
                                @if($errors->has('image'))
                                <p>{{ $errors->first('image') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="author">Author:</label>
                                <input type="text" id="author" name="author" required value="{{old('description')}}">
                                @if ($errors->has('author'))
                                <p>{{ $errors->first('author') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" id="title" name="title" required value="{{old("title")}}">
                                @if ($errors->has('title'))
                                <p>{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="topic">Topic:</label>
                                <input type="text" id="topic" name="topic" required value="{{old("topic")}}">
                                @if ($errors->has('topic'))
                                <p>{{ $errors->first('topic') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" rows="5" required value="{{old("description")}}"></textarea>
                                @if ($errors->has('description'))
                                <p>{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </form>
            </div>

            <!-- Form of creating players -->












        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <!-- Link the js file -->
    <script src="{{ asset('jsfiles/adminpanel.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showForm('iconic-moment-form');
        });
    </script>

</body>