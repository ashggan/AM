@extends('layouts.main')
@section('content')
<section id="banner" class="d-flex justify-content-start align-items-end" >
<div class="container">
    <div class="heading row justify-content-start align-items-end ">
        <div class="title animated 1 fadeInDown delay-1s"><h1 class="animated 1 fadeInUp delay-2s">  CONTACT</h1></div>   
    </div>
</div>    
</section>
<section id="portfilio">
<div class="container mt-5">
    <div class="row about justify-content-start align-items-center ">
        {{-- @include('inc.hire') --}}
        <div class="col-md-9 offset-md-2">
            <contact-form></contact-form>        
        </div>           
     </div>
</div>
</section>
@endsection