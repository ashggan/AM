@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8"><h2>project</h2></div>
        <div class="col-md-4"><a href="{{route('project.create')}} " class="btn btn-dark"> <i class="fa fa-plus falg"></i> </a> </div>
    </div>
    @foreach ($pros as $pro)
        <div class="row">
            <div class="card mt-5" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('project.show',$pro->id)}} ">{{$pro->title}}</a>  </h5>
                    <p class="card-text">{{$pro->summery}}</p>
                </div>
            </div>  
        </div>
    @endforeach    
</div>
@endsection