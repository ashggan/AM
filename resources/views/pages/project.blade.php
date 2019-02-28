@extends('layouts.main')
@section('content')
<section id="banner" class="d-flex justify-content-start align-items-end" >
<div class="container">
    <div class="heading row justify-content-start align-items-end ">
        <div class="title animated 1 fadeInDown delay-1s"><h1 class="animated 1 fadeInUp delay-2s">Maxnet support portable</h1></div>   
    </div>
</div>    
</section>
<section id="portfilio">
<div class="container mt-5">
    <div class="row project justify-content-start align-items-start ">
        @include('inc.hire')
        <div class="col-md-10">
            <div class="row mb-5">
                <div class="col-md-10 offset-md-1  animated 1 fadeInDown delay-2s">
                    <p>Have you ever wondered what makes a trip abroad truly awesome? It is neither the place nor the activities, but the moments when you spontaneously meet other like minded travellers and experience the city together. That’s what Gulliver is all about.</p>
                </div>
                <div class="col-md-4 offset-md-1  animated 1 fadeInDown delay-2s mb-5">
                    <p><b>Features</b></p>
                    <ul class="list">
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                    </ul>
                </div>
                <div class="col-md-4 offset-md-1 animated 1 fadeInDown delay-2s mb-5">
                    <p><b>Tech wrap-up</b></p>
                    <ul class="list">
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                        <li><i class="fa fa-star-o mr-2"></i> Have you ever wondered what makes </li>
                    </ul>
                    <p><b>Technologies used :</b></p>
                    <p><span class="box">Laravel</span><span class="box">Laravel</span><span class="box">Laravel</span> </p>
                </div>
                <div class="col-md-10 offset-md-1  animated 1 fadeInDown delay-2s">
                    <div class="row">
                        <p><b>Screenshots:</b></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="show d-flex justify-content-center align-items-center">
                                <img src="{{asset('screenshot/support.png')}} " alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4  ">
                            <div class="show d-flex justify-content-center align-items-center">
                                <img src="{{asset('screenshot/support.png')}} " alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="show d-flex justify-content-center align-items-center">
                                <img src="{{asset('screenshot/support.png')}} " alt="" width="100%">
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>      
    </div>
</div>
</section>
@endsection