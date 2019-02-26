@extends('layouts.main')
@section('content')
<section id="intro">
    <div class="wrapper container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="txt">
                    <div class="disc">Hello ! <i class="fa fa-gear fa-lg"></i> </div>
                    <div class="subt">I 'm Ashgan </div>
                    <div class="title">Web developer & designer </div>   
                    <div class="subt"> I love to build tings up ! </div>
                </div> 
            </div>
            <div class="col-md-7">
                <div class="bg">
                    <div class="line">
                      @for ($i = 0; $i < 8 ; $i++)
                            <span class="box"></span>
                        @endfor   
                    </div>
                </div>  
            </div>
        </div>  
    </div>       
</section>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="sm"><a href="#">G</a></div>
        </div>
    </div>
</section>
     
 @endsection