@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        

        @if (Auth::user()->hasRole('administrador'))

        @include('administrador')

        @elseif (Auth::user()->hasRole('asesor'))

        @include('asesor')    

        @elseif (Auth::user()->hasRole('emprendedor'))

        @include('emprendedor')
            
        @endif
       
    </div>
</div>
@endsection
