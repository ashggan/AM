@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8"><h2>project {{$pro->title}} </h2></div>
    </div>
    
<item-list edited=" {{$pro->id}} " shots=" {{$pro->screenshots}} " ></item-list>
  

</div>
@endsection