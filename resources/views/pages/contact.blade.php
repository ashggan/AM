@extends('layouts.new')
@section('content')
<section id="portfilio">
<div class="container mt-2 mb-4">
    <div class="row about justify-content-start align-items-start info">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <p><i class="fa fa-envelope mr-3"></i><a href="mailto:ashganwiki@gmail.com">ashganwiki@gmail.com</a></p>
                </div>
                <div class="col-md-4">
                    <p><i class="fa fa-github mr-2"></i><a href="https://github.com/ashggan" target="_blank">/ashggan</a></p>
                </div>
                <div class="col-md-4">
                    <p><i class="fa fa-linkedin mr-2"></i><a href="https://www.linkedin.com/in/ashgan-mustapha-66b56998" target="_blank">/ashgan-mustapha-66b56998</a></p>
                </div>        
            </div>
        </div>
        
    </div> 
    <contact-form></contact-form>          
 </div>
</section>
@endsection