@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gallery</h2>
    <div class="row">
    {{-- <imgupload></imgupload> --}}
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form action="{{route('gallery.save')}} " method="post" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="file" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" multiple height="100%" name="name[]" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-dark">Upload</button>
                            </div>
                        </div>
                            
                        
                    </div>
                    
                </div>
            </form>
        </div>

        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-3">
                    <img src="" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        @foreach ($imgs as $img)
        <div class="col-md-3 gallery mt-3">
        <div  class="cover">
            <img  class="card-img-top" src="/gallery/{{$img->name}}" alt="{{$img->name}}">
        </div>
        <div class="title">
            <div class="row">
                <div class="col-md-9"><p>{{$img->name}}</p></div>
                <div class="col-md-3" style="float:right">
                <form action=" {{route('gallery.remove',$img->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                    <button class="btn " type="submit"><i class="fa fa-remove"></i></button>
                </form>
                    
                </div>
            </div>
        </div>
        </div>                 
        @endforeach
        
    </div>
</div>
@endsection