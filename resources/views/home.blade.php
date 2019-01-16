@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        

        @if (Auth::user()->hasRole('administrador'))

             

        @elseif (Auth::user()->hasRole('asesor'))

            @include('asesor')

        @elseif (Auth::user()->hasRole('emprendedor'))

            I don't have any records!
            
        @endif
       
    </div>
</div>
@endsection
