@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-8"><h2>{{$pro->title}} </h2></div>
            <div class="col-md-2">
                <a href="{{route('project.remove',$pro->id)}}" class="btn btn-block btn-dark"> <i class="fa fa-remove falg"></i> </a> 
            </div>
            <div class="col-md-2">
                <a href="{{route('project.edit',$pro->id)}}" class="btn btn-block btn-dark"> <i class="fa fa-edit falg"></i> </a> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{$pro->summery}} </p> 
            </div>   
        </div>
        <div class="row">
            <div class="col-md-6">
                @foreach ($pro->wraps  as $wrap)
                    <li><i class="fa fa-star-o mt-3"></i> {{$wrap->wrap}} </li>
                @endforeach   
            </div>
            <div class="col-md-6">
                @foreach ($pro->features  as $feature)
                    <li><i class="fa fa-star-o mt-3"></i> {{$feature->feat}} </li>
                @endforeach 
            </div>
        </div>
        <div class="row">
            @foreach ($pro->techs as $tech)
            <span class="badge badge-pill badge-success">{{$tech->name}}</span>
            @endforeach
        </div>
        <div class="row">
            @foreach ($pro->screenshots as $img)
            <div class="col-md-4">
                <img src="/gallery/{{$img->name}}" alt="" srcset="" width="100%">
            </div>
                
            @endforeach
        </div>    
        
      
</div>
@endsection
