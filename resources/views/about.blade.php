<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Estorya Ta!</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<style>

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

  <div class="container">
    <div class="row" style="margin-top: 5%; margin-bottom: 5%">
      <p style="text-align:justify;">Project Estorya ta! is a story-telling project using the different research-based competencies that a child should acquire. It is a Cebuano phrase which invites conversation; literally means “Let’s talk!” The phrase speaks for this proposed project as it revolves around human interaction through stories. Basically, it’s about shaping stories and how stories shape the sensibility of children.</p>
      <p style="text-align:justify;">The harshness of life lived on the streets, as well as evidences of hope for betterment, will be the highlight of each story’s plot. Incorporated in the plot are means for the children to grow in these learning areas: Cognitive Development, Home and Family, Contribution and Belonging, Everyday adult/older child tasks, Collaboration and Social learning, Health and Wellbeing, and the Effective use of language to request for what they require. Also embedded in each story is the highlight of Cebuano culture and language - which is part of the curriculum in the Kindergarten and early primary education in Cebu. Hence, literary artists, photographers, pedagogical experts and storytellers will be invited to create seven Cebuano children literature with matching approach and formative assessments.</p>
      <p style="text-align:justify;">The end product of the project is a publication of the photo-poetry book which expresses the experiences of the street kids through black and white photography and poetry. The books will be sold and the proceeds will go to the Tinago homebase.</p>
      <blockquote>In a nutshell, Project Estorya Ta! is creating stories.</blockquote>
    </div>
  </div>

<div class="row" style="background-color: #3B3B3B;">
  <font color="white" style="margin-top: 5%">
    <div align="center"> University of San Carlos-Pathways</div>
    <div align="center"> Nasipit, Talamban, Cebu City ,6000, Philippines</div>
    <div align="center"> uscpathwaysorganization@gmail.com</div>
  </font>
</div>

</div>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>