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
        <div class="col-md-8 morado ">
            <form>
                <div class="form-group row justify-content-center">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 col-md-8">
                        <input type="email" class="form-control" id="email" placeholder="Tu Email">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label for="pass" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10 col-md-8">
                        <input type="password" class="form-control" id="pass" placeholder="Tu Contraseña">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-10 col-md-10">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-10 col-md-10">
                        Aún no tienes una cuenta? <a href="registrar_usuario.php">Regístrate aquí</a>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>

<?php include 'includes/templates/footer.php' ?> 