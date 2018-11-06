<?php include 'includes/templates/header.php' ?> 


<div class="container morado mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h1 class="text-center">Formulario de registro</h1>
        </div>
    </div>
    <div class="row justify-content-center my-5">            
        <div class="col-md-12">
            <form>
                <div class="form-row justify-content-center" >
                    <div class="form-group col-md-5">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Tu Apellido">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Tu Email">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="confirmaemail">Confirma Email</label>
                        <input type="email" class="form-control" id="confirmaemail" placeholder="Tu Email">
                    </div>
                </div>
                <div class="form-row justify-content-center" >
                    <div class="form-group col-md-5">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="nombre" placeholder="Tu Contraseña">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="confirmacontraseña">Confirma Contraseña</label>
                        <input type="password" class="form-control" id="confirmacontraseña" placeholder="Tu Contraseña">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" placeholder="1234 calle principal">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="pais">País</label>
                        <select id="pais" class="form-control">
                            <option selected>Selecciona...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="ciudad">Ciudad</label>
                        <select id="ciudad" class="form-control">
                            <option selected>Selecciona...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="comuna">Comuna</label>
                        <select id="comuna" class="form-control">
                            <option selected>Selecciona...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-10 col-md-10">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="button" class="btn btn-outline-danger" id="btnCancelar">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'includes/templates/footer.php' ?> 