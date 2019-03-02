@extends('layouts.main')
@section('content')
<section id="home" class="justify-content-center align-items-center ">
        <div class="container">
            <div class="row ">
                <div class="col-md-10 offset-md-1 content">
                    <p class="subt animated 1 fadeInDown delay-2s">I 'm Ashgan<span></span>  </p>
                    <div class="bg">
                    <h1 class=" animated 1 fadeInUp delay-3s"><span class="tag">< </span> FULL STACK DEVELOPER <span class="tag">/></span></h1>  
                    </div>
                    <div class="call">
                        <a href="/portifolio" class="btn btn-dark animated 1 fadeInLeft delay-4s">portfolio</a>
                        <a href="/contact" class="btn btn-dark animated 1 fadeInRight delay-4s">hire me</a>
                    </div>
                    
                    {{-- <p class="disc">& I love to build things up ! </p> --}}
                </div>
            </div>
        </div>  
        <div class="container">
            <div class="row justify-content-center align-items-center  justify-self-end">
                <div class="social animated 1 fadeInUp delay-5s">
                    {{-- <p> --}}
                       <div class="circle"><a href="mailto:ashganwiki@gmail.com"><i class="fa fa-envelope"></i></a></div>  
                       <div class="circle"><a href="https://github.com/ashggan" target="_blank"><i class="fa fa-github"></i></a></div>  
                       <div class="circle"><a href="https://www.linkedin.com/in/ashgan-mustapha-66b56998/" target="_blank"><i class="fa fa-linkedin"></i></a></div>  
                       {{-- <div class="circle"><a href=""><i class="fa fa-facebook"></i></a></div>   --}}
                    {{-- </p> --}}
                </div>
            </div>
        </div>      
</section>
<section id="footer" style="background:#0a0a0a">
    
</section>
@endsection
@section('script') 
@endsection