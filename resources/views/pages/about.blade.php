@extends('layouts.main')
@section('content')
<section id="banner" class="d-flex justify-content-start align-items-end" >
<div class="container">
    <div class="heading row justify-content-start align-items-end ">
        <div class="title animated 1 fadeInDown delay-1s"><h1 class="animated 1 fadeInUp delay-2s">ABOUT ME</h1></div>   
    </div>
</div>    
</section>
<section id="portfilio">
<div class="container mt-5">

    <div class="row about justify-content-start align-items-start "> 
        @include('inc.hire')
             <div class="col-md-8">
               
                 <div class="row mt-5">
                    <p>Iam self-taught web developer/programmer with over four years of experience in full stack development and interest in data-driven web apps. Collaborative communicator able to gather and translate customer requirements into technical terms and work effectively in team environments. Quick learner proficient in many web technologies and always keep up to date with latest technologies to deliver optimal solutions. Critical and analytical thinker adept at solving complex technical problems and creating practical IT solutions using web technologies. Experience in planning and delivering software platforms across multiple products and organizational units.</p>     
                 </div>
                <div class="row  justify-content-center align-items-center">
                <a href="/cv/Ashgan_Mustafa_Resume.docx" target="_blank" class="btn btn-light  mr-3"> 
                    <span class="tag">  <i class="fa fa-file mr-3"></i>My CV </span>
                </a> 
                <a href="/portifolio"   class="btn btn-light"> 
                    <span class="tag">  <i class="fa fa-briefcase mr-3"></i>  PORTFILIO </span>
                </a> 
                 </div>
{{--                 
                <div class="row justify-content-center align-items-center ">
                         <div class="social animated 1 fadeInUp delay-1s pt-0 mb-3 mt-5">
                            <div class="circle"><a href=""><i class="fa fa-envelope"></i></a></div>  
                            <div class="circle"><a href=""><i class="fa fa-linkedin"></i></a></div>  
                            <div class="circle"><a href=""><i class="fa fa-github"></i></a></div>  
                            <div class="circle"><a href=""><i class="fa fa-facebook"></i></a></div>  
                        </div>
                 </div> --}}
            </div>
            
     </div>
</div>
</section>
@endsection