<?php
    include "cabecera.inc.php";
?> 
<!-- <div class="login">
    <form action="verifica.php" method="POST">
    <label >Usuario</label>
    <input  type="text" name="ci">
    <br>
    <label>Clave</label>
    <input type="password" name="clave">
    <br>
    <input type="submit" name="aceptar" value="Aceptar">
    <input type="submit" name="cancelar" value="Cancelar">
    </form>
</div> -->

<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Inicia sesion</h3>
                            <p class="text-muted mb-4">ingresa tu clave y contraseña para manejar.</p>
                            <form action="verifica.php" method="POST">
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="text" placeholder="Nombre de usuario" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" name="ci">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Ingresa tu contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="clave">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Olvidaste tu contraseña</label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" name="aceptar" value="Aceptar">
                                <input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" name="cancelar" value="Cancelar">
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

<?php
    include "pie.inc.php";
?>