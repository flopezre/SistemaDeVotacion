<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistema de Votacion</title>
        <!<!-- Bootstrap version online -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
        <!<!-- Bootstrap version offline -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"/>
    </head>
    
    <body>
        <div class="form-group">
            <h1>FORMULARIO DE VOTACIÓN</h1>
            <form class="form-horizontal" action="vista-datos.php" method="POST" >
                
                <div class="form-group">
                    <p>
                        <label class="col-lg-4 control-label" for="nombre">Nombre y Apellido <span></span></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="txtNombre" required />                 
                        </div>
                    </p>                  
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="alias">Alias <span></span></label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="txtAlias" />
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="rut">Rut <span></span></label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="txtRut" />
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="email">Email <span></span></label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="txtEmail" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="region">Región <span></span></label>
                    <div class="col-lg-4">
                        <select class="form-control" name="cmbRegion"></select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="comuna">Comuna <span></span></label>
                    <div class="col-lg-4">
                        <select class="form-control" name="cmbComuna"></select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="candidato">Candidato <span></span></label>
                    <div class="col-lg-4">
                        <select class="form-control" name="cmbCandidato"></select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-4 control-label" for="entero">Como se entero de nosotros <span></span></label>
                    <div class="col-lg-4">
                        <input type="checkbox" name="chkbxWeb" /> Web
                        <input type="checkbox" name="chkbxTv" /> TV
                        <input type="checkbox" name="chkbxRrss" /> Redes Sociales
                        <input type="checkbox" name="chkbxAmigo" /> Amigo
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-4">
                        <input class="btn btn-primary" type="submit" />
                    </div>
                </div>
            </form>
        </div>
        
        <!<!-- Scripts online -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <!<!-- Scripts offline -->
        <script src="js/jquery-3.5.1.slim.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>