@extends('layouts.new')
@section('content')

<section id="portfilio">
<div class="container mt-2">
    
    <div class="row about justify-content-start align-items-start mb-5"> 
        <div class="col-md-11">       
            <div class="row"> 
                <div class="col-md-3 col-sm-6">
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">HTML</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="progress pink">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">JS</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="progress green">
                    <span class="progress-left">
                    <span class="progress-bar"></span>
                    </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">CSS</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="progress yellow">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value justify-content-start align-items-start">PHP</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row about justify-content-start align-items-start "> 
        <div class="col-md-11">       
                <div class="row">
                <p>Iam self-taught web developer/programmer with over four years of experience in full stack development and interest in data-driven web apps. Collaborative communicator able to gather and translate customer requirements into technical terms and work effectively in team environments. Quick learner proficient in many web technologies and always keep up to date with latest technologies to deliver optimal solutions. </p>     
                </div>
            
        </div>            
    </div>

    <div class="row about justify-content-start align-items-start mb-5"> 
        <div class="col-md-11">
            <b>Technologies :</b>
            <div class="row mt-2">
                <div class="col-md-2 mt-2"><img src="/techs/laravel.png" alt="laravel" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/git.png" alt="github" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/MySQL.jpg" alt="MySQL" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Vue.png" alt="Vue" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/MongoDB.png" alt="MongoDB" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/sass.png" alt="sass" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Nodejs.png" alt="Nodejs" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/WordPress.png" alt="WordPress" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/tableau.png" alt="tableau" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/ps.png" alt="photoShop" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Materialize.png" alt="Materialize" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Ionic.png" alt="Ionic" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Gulp.png" alt="Gulp" width="auto" height="90px"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Express.png" alt="Express" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Bulma.png" alt="Bulma" width="100%"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Bootstrap.png" alt="Bootstrap"  width="auto" height="90px"></div>
                <div class="col-md-2 mt-2"><img src="/techs/Bulma.png" alt="Bulma" width="100%"></div>      
             </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('script') 
<script>
        function openNav(){ 
            var x = document.getElementsByClassName("progress");//.style.visibility = "hidden" 
            console.log(x.length);
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "hidden";
            }   
          document.getElementById('mysidenav').style.borderRight = "2px solid #fff";
            
            document.getElementById('mysidenav').style.width = "80%";
        }
        function closeNav(){
            var x = document.getElementsByClassName("progress");//.style.visibility = "hidden" 
            console.log(x.length);
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "visible";
                x[i].style.transition = "all .5s ease-in-out";
            }    
            document.getElementById('mysidenav').style.width = "0%";

        }
      </script>
@endsection