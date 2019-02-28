@extends('layouts.main')
@section('content')
<section id="banner" class="d-flex justify-content-start align-items-end" >
<div class="container">
    <div class="heading row justify-content-start align-items-end ">
        <div class="title animated 1 fadeInDown delay-1s"><h1 class="animated 1 fadeInUp delay-2s">{{$pro->title}}</h1></div>   
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
                    <p>{{$pro->summery}} </p>
                </div>
                <div class="col-md-4 offset-md-1  animated 1 fadeInDown delay-2s mb-5">
                    <p><b>Features</b></p>
                    <ul class="list">
                         @foreach ($pro->features as $item)
                        <li><i class="fa fa-star-o mr-2"></i> {{$item->feat}}</li>                             
                         @endforeach   
                    </ul>
                </div>
                <div class="col-md-4 offset-md-1 animated 1 fadeInDown delay-2s mb-5">
                    <p><b>Tech wrap-up</b></p>
                    <ul class="list">
                        @foreach ($pro->wraps as $item)
                            <li><i class="fa fa-star-o mr-2"></i> {{$item->wrap}} </li>                          
                        @endforeach
                    </ul>
                    <p><b>Technologies used :</b></p>
                    <p> 
                        @foreach ($pro->techs as $item)
                        <span class="box">{{$item->name}}</span>
                        @endforeach
                    </p>
                 </div>
                <div class="col-md-10 offset-md-1  animated 1 fadeInDown delay-2s">
                    <div class="row">
                        <p><b>Screenshots:</b></p>
                    </div>
                    <div class="row">
                        @foreach ($pro->screenshots as $item)
                            <div class="col-md-4 ">
                                    <div class="show d-flex justify-content-center align-items-center">
                                        <img src="/gallery/{{$item->name}}" alt="{{$item->screenshot}}" width="100%">   
                                    </div>
                            </div>         
                        @endforeach                   
                    </div>
                    </div>                
                </div>
            </div>
        </div>      
    </div>
</div>
</section>
@endsection