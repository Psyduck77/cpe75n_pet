<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<style>
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}
/* Month header */
.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}
/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}
.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}
/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 10px;
}
/* Next button */
.month .next {
    float: right;
    padding-top: 10px;
}
/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 12px 0;
    background-color:#ddd;
}
.weekdays li {
    display: inline-block;
    width: 13%;
    color: #666;
    text-align: center;
}
/* Days (1-31) */
.days {
    padding: 5px 0;
    background: #eee;
    margin: 0;
}
.days li {
    list-style-type: none;
    display: inline-block;
    width: 13%;
    text-align: center;
    margin-bottom: 5px;
    font-size:11px;
    color:#777;
}
/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
</style>
</head>
<body style="background-color: #D8D8D8; ">

<header>
  <img src="{{ asset('images/petwname.png')}}" style="width:100%; height:40%;"> 
</header>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('home')}}">HOME</a> </li>
          <li><a href="{{ url('books') }}">BOOKS</a></li>
          @if (session('name'))
            <li><a href="{{ url('forum')}}">PROJECT MANAGER</a></li>
          @endif
          <li><a href="{{ url('about')}}">ABOUT US</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (!session('name'))
          <li><a href="{{ url('registration')}}"><span class="glyphicon glyphicon-user"></span> Be a Volunteer </a></li>
          <li><a href="{{ url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          @else
          <li><a><span>Hello, {{session('name')}}</span></a></li>
          <li><a href="{{ url('user/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
          @endif
        </ul>
    </div>
  </nav>

  <!-- main carousel -->
  <div class="row">

    <div class="col-md-6" style="height: 30%; margin-left: 5%; margin-top: 3%; margin-bottom: 5%">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/PET LOGO.png">
          </div>

          <div class="item">
            <img src="images/carousel.png">
          </div>

          <div class="item">
            <img src="images/carousel1.png">
          </div>


          <div class="item">
            <img src="images/carousel2.png">
          </div>

          <div class="item">
            <img src="images/carousel3.png">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-4" style="margin-left: 5%; margin-top: 3%;">
      <div class="month"> 
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li> October<br>
            <span style="font-size:10px">2017</span>
          </li>
        </ul>
      </div>

      <ul class="weekdays">
        <li>Sun</li>
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>
      </ul>

      <ul class="days"> 
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li><span class="active">20</span></li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>
        <li>31</li>
      </ul>
    </div>
  </div>
<!-- end of main carousel -->

  <div class="row" style="background-color: #C1C1C1">
    <h2 style="margin-left: 10%"> What we do .. </h2>
  </div>

  <div class="row" style="background-color: #C1C1C1">

    <div class="col-md-3" style="height: 20%; margin-left: 6%; margin-top: 3%; margin-bottom: 3%;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/carousel-1/storytelling1.png">
            <div class="carousel-caption">
              <h3>Story Telling session 1</h3>
                <p>August 28, 2017</p>
            </div>
          </div>

          <div class="item">
            <img src="images/carousel-1/storytelling2.png">
          </div>

          <div class="item">
            <img src="images/carousel-1/storytelling3.png">
          </div>

          <div class="item">
            <img src="images/carousel-1/storytelling4.png">
          </div>

          <div class="item">
            <img src="images/carousel-1/storytelling5.png">
          </div>
        </div>
      </div>
    </div>

  <div class="col-md-3" style="height: 20%; margin-left: 6%; margin-top: 3%; margin-bottom: 3%;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/carousel-2/activities.png">
              <div class="carousel-caption">
              <h3>Story Telling session 2</h3>
                <p>September 2, 2017</p>
            </div>
          </div>

          <div class="item">
            <img src="images/carousel-2/activities1.png">
          </div>

          <div class="item">
            <img src="images/carousel-2/activities2.png">
          </div>

          <div class="item">
            <img src="images/carousel-2/activities3.png">
          </div>

          <div class="item">
            <img src="images/carousel-2/activities4.png">
          </div>
        </div>
      </div>
    </div>

  <div class="col-md-3" style="height: 20%; margin-left: 6%; margin-top: 3%; margin-bottom: 3%">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/carousel-3/pet1.png">
              <div class="carousel-caption">
              <h3>Story Telling session 3</h3>
                <p>September 3, 2017</p>
            </div>
          </div>

          <div class="item">
            <img src="images/carousel-3/pet2.png">
          </div>

          <div class="item">
            <img src="images/carousel-3/pet3.png">
          </div>

          <div class="item">
            <img src="images/carousel-3/pet4.png">
          </div>

          <div class="item">
            <img src="images/carousel-3/pet5.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="background-color: #9E9E9E">
    <h2 style="margin-left: 10%"> Thank You </h2>
  </div>

  <div class="row" style="background-color: #9E9E9E">
  <div class="col-md-2"></div>
    <div class="col-md-4" style="height: 30%; margin-left: 15%; margin-top: 3%; margin-bottom: 3%;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/appreciation/appreciation.png">
              <div class="carousel-caption">
                <p>Daghang salamat mga ate, kuya!</p>
              </div>
          </div>

          <div class="item">
            <img src="images/appreciation/appreciation1.png">
              <div class="carousel-caption">
                <p>Salamat sa mga pagtabang ninyo</p>
              </div>
          </div>

          <div class="item">
            <img src="images/appreciation/appreciation3.png">
              <div class="carousel-caption">
                <p>Unta magpadayon mo sa pagtudlo kanamo</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="background-color: #3B3B3B;">
    <font color="white" style="margin-top: 10%">
      <div align="center"> University of San Carlos-Pathways</div>
      <div align="center"> Nasipit, Talamban, Cebu City ,6000, Philippines</div>
      <div align="center"> uscpathwaysorganization@gmail.com</div>
    </font>
  </div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>