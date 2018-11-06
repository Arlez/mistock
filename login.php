<?php include 'includes/templates/header.php' ?> 



<div class="container">
    <div class="row logo">
        <div class="col">
            <div class="text-center">
                <img src="img/icono-bl.png" class="rounded" alt="mistock">
                <img src="img/logo-letras-bl.png" class="rounded" alt="mistock">
            </div>
        </div>       

    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 morado">
            <form class="login-form">                           
                <div class="form-group">
                    <label for="email">Corréo electrónico</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu corréo">
                    <small id="emailHelp" class="form-text text-white-50">No compartiremos tu corréo con nadie</small>
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                </div>

                <button type="submit" class="btn btn-primary ">Ingresar</button>
                <br><br>
                <div class="form-group">
                    Aún no tienes una cuenta? <a href="">Regístrate aquí</a>   
                </div>             
            </form>
        </div>    
    </div>
</div>

<?php include 'includes/templates/footer.php' ?> 