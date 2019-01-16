 
@extends('asesor')

@section('contenido')

<div class="row">
	<div class="col-sm-12">
            <div class="card">
                <div class="card-header">Messenger-vinc</div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
            </div>
    </div>
</div>


     
</div>
@endsection