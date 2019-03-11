<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"  >
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}"  >
    <script src="{{asset('js/app.js')}} " defer></script>
    <title>FULL STACK DEVELOPER</title>
  </head>
  <body>
<div id="app">
  @include('inc.navbar')
    @if (Route::current()->getName() == "home")
    <div class="homePage">
        @yield('content')
    </div>
    @else
    <div id="apps">
      <div class="main  flex-column justify-content-start align-items-start">
        <div class="container">
            <div class="row   justify-content-start align-items-start">
                    <div class="hire mr-3">
                        <p>I 'm available for <a href="/contact">hire me</a>  </p>
                  </div>
                <div class="resume">
                    <a  href="/cv/Ashgan_Mustafa_Resume.docx"><i class="fa fa-file mr-3"></i>My Resume</a>
                </div>
            </div>
        </div>
        @yield('content')
      </div>
        <div class="sider" id="sider">
        <div class="menu" id="menu">
          <div class="toggle">
            <div class="togglenav" onclick="openNav()">
              <span></span>
            </div>  
          </div>     
        </div> 
        <div class="title">
          <h1>{{ isset($title)? $title : 'title'}}</h1> 
        </div>
        <div class="contact" id="contact">
          <div class="row justify-content-center align-items-center mb-2">
            <div class="social animated 1 fadeInUp delay-1s">
              <div class="circle"><a href="mailto:ashganwiki@gmail.com"><i class="fa fa-envelope"></i></a></div>  
              <div class="circle"><a href="https://github.com/ashggan" target="_blank"><i class="fa fa-github"></i></a></div>  
              <div class="circle"><a href="https://www.linkedin.com/in/ashgan-mustapha-66b56998/" target="_blank"><i class="fa fa-linkedin"></i></a></div>                                        
            </div>
          </div>
        </div>
      </div>
    </div>

    @endif
    
</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      function openNav(){ 
          document.getElementById('mysidenav').style.width = "80%";
          document.getElementById('mysidenav').style.borderRight = "2px solid #fff";
          document.getElementById('menu').style.visibility = "hidden";
          document.getElementById('contact').style.visibility = "hidden";
      }
      function closeNav(){
          document.getElementById('mysidenav').style.width = "0%";
          document.getElementById('menu').style.visibility = "visible";
          document.getElementById('contact').style.visibility = "visible";

      }
    </script>
    @yield('script')
  </body>
</html>