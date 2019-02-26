@extends('layouts.main')
@section('content')
{{-- <div class="full-page">
    <div class="menu column justify-content-center">
        <div class="logo row justify-content-center">
            <a href="/"> 
                <img src="logo.png" alt="AM" srcset="">
            </a>
        </div>
        <div class="list column justify-content-center">
            <div class="rotateList"><a href="#">home</a></div>              
            <div class="rotateList"><a href="#">home</a></div>              
            <div class="rotateList"><a href="#">home</a></div>             
         </div>
    </div>
    <div class="content justify-content-center">


    <!-- <div class="element"></div> -->
    <div class="container">
        <div class="row row align-items-center justify-content-center>
            <div class="col-md-8 offset-md-3">
                <p>Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p>
            </div>
        </div>
    </div>


    </div>
</div> --}}
{{-- <section id="intro">
    <div class="container">
        <div class="trigger">
            <div class="box"> 
                <h5>hi !</h5>
            </div>  
        </div>

    </div>    
</section> --}}
{{-- <nav class=""></nav> --}}
<section id="spinning">
    <div class="view">
        <div class="plane main">
            @for ($i = 0; $i < 6; $i++)
                <div class="circle">
                    {{-- <h4>Hello !</h4> --}}
                </div>
            @endfor
        </div>
    </div>
</section>


@endsection

@section('script')
    <script>
        $('.trigger').on('click',function(){
            $(this).append('<div class="box">')
        })
    </script>
@endsection