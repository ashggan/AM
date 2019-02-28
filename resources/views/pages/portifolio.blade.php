@extends('layouts.main')
@section('content')
<section id="banner" class="d-flex justify-content-start align-items-end" >
<div class="container">
    <div class="heading row justify-content-start align-items-end ">
        <div class="title animated 1 fadeInDown delay-2s"><h1 class="animated 1 fadeInUp delay-3s">portfilio</h1></div>   
    </div>
</div>    
</section>
<section id="portfilio">
<div class="container mt-5">
    <div class="row project justify-content-start align-items-start mt-5">
        @include('inc.hire')
        <div class="col-md-10">
            @foreach ($pros as $pro)
            <div class="row mb-5">
                <div class="col-md-6 mb-5">
                    <div class="block">
                        <h4>{{$pro->title}}</h4>
                        <p>{{$pro->summery}} </p>
                        <p><b>Features :</b></p>
                        <ul class="list">
                            @foreach ($pro->features as $item)
                                <li> <i class="fa fa-star-o mr-2"></i>{{$item->feat}}</li>
                            @endforeach
                        </ul>
                        <a href="{{route('show.project',$pro->id)}}" class="btn more"> More details</a>
                    </div>
                </div>
                <div class="col-md-6  d-flex justify-content-center align-items-start">
                    <div class="show d-flex justify-content-center align-items-center">
                        @foreach ($pro->screenshots as $item)
                        @if ($loop->first)
                            <img src="/gallery/{{$item->name}}" alt="{{$item->screenshot}}" width="100%">            
                        @endif  
                        @endforeach
                    </div>
                </div>
            </div>    
                
            @endforeach
            <div class="row mt-5 justify-content-center align-items-center">
                    {{ $pros->links() }}
            </div>
            {{-- <div class="row mb-5">
                    <div class="col-md-6 mb-5">
                        <div class="block">
                            <h4>Maxnet support portable</h4>
                            <p>Ticketing system allow the clients to submit requests and tracking it's status  </p>
                            <p><b>Features :</b></p>
                            <ul>
                                <li> <i class="fa fa-star-o mr-2"></i> multiauthention system</li>
                                <li> <i class="fa fa-star-o mr-2"></i>  users managment system</li>
                            </ul>
                            <a href="/portifolio/project" class="btn more"> More details</a>
                        </div>
                    </div>
                    <div class="col-md-6  d-flex justify-content-center align-items-start">
                        <div class="show d-flex justify-content-center align-items-center">
                            <div class="large"><i class="fa fa-search-plus"></i></div> 
                            <img src="{{asset('screenshot/support.png')}} " alt="" width="100%">
                        </div>
                    </div>
            </div> --}}
        </div>      
    </div>
</section>
@endsection