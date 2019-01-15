<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>
<body>
<div class="container mt-2" >
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <div class="card">
            <div class="card-header">Redactar Nuevo Correo</div>
               <div class="card-body">

                  <form method="POST" action="{{ route('emails.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label>Elegir Destinatario </label>
                        <select class='form-control' name="tipocorreo">
                          <option value="1">Emprendedores</option>
                          <option value="2">Asesores</option>
                        </select>
                    </div>  

                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Asunto" name="title" id="title">
                    </div>

                    <div class="form-group">
                      <textarea placeholder="Redacta el mensaje" name="body" id="mensaje" class="form-control" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                       <div class="btn btn-default btn-file">
                          <input type="file" name="file" class="form-control-file border">
                      </div>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>  
                    </form>        
                  </div>
                </div>        
              </div>
            </div>
          </div>  
        </div>  
      </div>
                                
         

 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>