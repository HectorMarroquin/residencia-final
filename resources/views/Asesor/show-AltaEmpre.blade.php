@extends('asesor')
 
@section('contenido')

@include('Asesor.pdf.infoAltaEmpre')

 <div class="form-group row">
        <div class="col-12 text-center">
            <div class="row justify-content-center">
                 <div class="col-12 col-sm-9 col-md-4">
                                 <a type="button" class="btn btn-dark" href="{{ route('asesor.edit', $emprendedor->id )}}">
                            <i class="fas fa-file-download"> Descargar como documento PDF</i></a>
                                </div>
                            </div>
                        </div>
                    </div>  
@endsection
        