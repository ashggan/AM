@extends('layouts.main')
@section('content')
<section id="bars">
    <div class="assembly">
        @for ($i = 0; $i < 23; $i++)
            <div class="positioner">
                <div class="prism">
                    @for ($j = 0; $j < 6; $j++)
                    <div class="prism__face"></div>
                    {{-- <div class="prism__face"></div>
                    <div class="prism__face"></div>
                    <div class="prism__face"></div>
                    <div class="prism__face"></div>
                    <div class="prism__face"></div> --}}
                    @endfor
                </div>
            </div>
        @endfor
    </div>
</section>
@endsection
