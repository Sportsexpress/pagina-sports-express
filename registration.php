<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <title>Registro</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-registration">
    <?php include './inc/navbar.php'; ?>
    <section id="form-registration">
        <div class="container">
            <div class="page-header">
              <h1>REGISTRO <small class="tittles-pages-logo">SPORTS EXPRESS</small></h1>
            </div>
            <p class="lead text-center">
              En este espacio podra registrarte para poder acceder a la compra de Productos en SPORTS EXPRESS
            </p>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <figure>
                      <img src="./assets/img/mvp.jfif" width="10000" height="10000" alt="store" class="img-responsive">
                    </figure>
                </div>
                <div class="col-sm-7">
                    <div id="container-form">
                       <p class="text-center lead">Registro de Clientes</p>
                       <br><br>
                       <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-xs-12">
                                <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su numero de documento</label>
                                  <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su n??mero de Documento. Solamente n??meros" maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                  <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                  <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su n??mero telef??nico</label>
                                    <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su n??mero telef??nico. M??nimo 8 digitos m??ximo 15">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                    <input class="form-control" type="email" required name="clien-email" title="Ingrese la direcci??n de su Email" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su direcci??n</label>
                                  <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direci??n en la reside actualmente" maxlength="100">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                    <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. M??ximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contrase??a</label>
                                  <input class="form-control" type="password" required name="clien-pass" title="Defina una contrase??a para iniciar sesi??n">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contrase??a</label>
                                    <input class="form-control" type="password" required name="clien-pass2" title="Repita la contrase??a">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-primary btn-block btn-raised" style=background-color:black;>Registrarse</button></p>
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>