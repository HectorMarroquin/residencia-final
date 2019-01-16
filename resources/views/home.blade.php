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
        <!--<div class="col-sm-12">
            <div class="card">
                <div class="card-header">We Code Messenger</div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
            </div>
        </div>-->
    </div>
</div>
@endsection
