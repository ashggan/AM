@extends('layouts.new')
@section('content')
     {{-- <div class="container">
         <div class="row   justify-content-start align-items-start">
                 <div class="hire mr-3">
                    <p><i class="fa fa-tidal mr-3"></i> I 'm available for <a href="/contact">hire me</a>  </p>
              </div>
             <div class="resume">
                 <a  href="/cv/Ashgan_Mustafa_Resume.docx"><i class="fa fa-file mr-3"></i>My Resume</a>
             </div>
         </div>
     </div> --}}
    <div class="container">
        <div class="row mb-5 mt-5">
            <p> I had designed , developed and build different applications throught the 4 years I had been working in  web applications development. </p>
        </div>
             
        <div class="panel-group mt-5" id="accordion">
            @foreach ($pros as $pro)
            <div class="panel panel-default mb-5">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}"><i class="fa fa-plus pr-3 mr-3 "></i>
                    </a> {{$pro->title}}
                    </h4>
                </div>
            <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse {{($loop->first)? 'in' :'' }}">
                    <div class="panel-body"> 
                        <div class="row">
                            <div class="col-md-12 mb-4">{!! html_entity_decode($pro->summery) !!}</div>
                            <div class="col-md-6 mb-2">
                            <p><b>Tech wrap-up</b></p>
                                <ul class="list">
                                    @foreach ($pro->wraps as $item)
                                        <li> <i class="fa fa-star-o mr-2"></i>{{$item->wrap}} </li> 
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6 mb-2">
                                <ul class="list">
                                <p><b>Features</b></p>
                                    @foreach ($pro->features as $item)
                                        <li><i class="fa fa-star-o mr-2"></i>{{$item->feat}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10" offset-md-1>
                            <p><b>Technologies used :</b></p>
                                @foreach ($pro->techs as $item)
                                <span class="box">{{$item->name}}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($pro->screenshots as $item)
                                <div class="col-md-5  mt-5">
                                        <div class="show d-flex justify-content-center align-items-center">
                                            <img src="/gallery/{{$item->name}}" alt="{{$item->screenshot}}" width="100%">   
                                        </div>
                                </div>         
                            @endforeach                   
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
            
            {{-- <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div> --}}
        </div> 
    </div>    
@endsection