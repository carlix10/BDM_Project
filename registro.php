<?php
    require 'conexion.php';

   /* if(!empty($_POST['name']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['sexo']) 
    && !empty($_POST['tipo_usuario'])&& !empty($_POST['rol'])&& !empty($_POST['nacimiento'])&& !empty($_POST['avatar'])){
        $sql=  mysqli_query( "CALL sp_Usuarios( 'Crear', null , :name, :apellido, :sexo, :nacimiento, :email, :username, :password, :tipo_usuario, :rol, :avatar)" );
        $stm = $conexion->prepare($sql);
        $stm->bindParam(':name', $_POST['name']);
        $stm->bindParam(':apeliido', $_POST['apellido']);
        $stm->bindParam(':sexo', $_POST['sexo']);
        $stm->bindParam(':nacimiento', $_POST['nacimiento']);
        $stm->bindParam(':email', $_POST['email']);
        $stm->bindParam(':username', $_POST['username']);
        $stm->bindParam(':password', $_POST['password']);
        $stm->bindParam(':tipo_usuario', $_POST['tipo_usuario']);
        $stm->bindParam(':rol', $_POST['rol']);
        $stm->bindParam(':avatar', $_POST['avatar']);
       
        if ($stmt->execute()) {
            $message = 'Successfully created new user';
          } else {
            $message = 'Sorry there must have been an issue creating your account';
        }

    }*/


?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online</title>
        <meta name="viewport" content="width=devide-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="icon" type="image/png" href="../img/logo.JPG">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">

    </head>
    
    <body>
        <header class="p-2 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="home.php" class="Titulo nav-ink">AETNA</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li><a href="tienda.php" class="nav-link px-2 text-white">Cursos</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                  
                    </ul>
        
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5" role="search">
                        <input type="search" class="form-control " placeholder="Buscar ..." aria-label="Search">
                    </form>
                    
                    <div class="text-end">
                        <a href="iniciosesion.php" class="Navegador">Entra</a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="button" href="registro.php" class="btn btn-outline-light me-2">  Registrate </a>
                    </div>
                </div>
            </div>
        </header>
       
        <main class="main-registrar modal position-static d-block" >
            <div class="form-signin w-100 m-auto">
                <form action="" method="post" id="form" class="form-register" >
                    <div class="register-box" id="register-box">
                    <h2 class="">Registro</h2>
            
                    <div class="formulario" id="form">
                    
                        <div class="form-floating">
                            <input type="name" class="form-control"  placeholder="Ingrese su nombre" placeholder="Ingrese su nombre" id="name"
                            required> 
                            <label for="floatingInput">Nombre/s</label>
                        </div>
                        <div class="form-floating">
                            <input type="apellido" class="form-control"  placeholder="Ingrese su apellido" placeholder="Ingrese su apellido" id="apellido"
                            required> 
                            <label for="floatingInput">Apellido/s</label>
                        </div>
                        <div class="form-floating"> 
                            <input type="input-email" class="form-control"  placeholder="Ingrese su email" id="email" 
                            required> 
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating"> 
                            <input type="input-user" class="form-control"  placeholder="Ingrese su nombre de usuario" id="username" 
                            required> 
                            <label for="floatingInput">Usuario</label>
                        </div>

                        <div class="form-floating"> 
                            <input type="password" class="form-control"  placeholder="Ingrese su contaseña" id="password"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            required>
                            <label for="floatingInput">Contraseña</label>

                        </div>
                    
                        <div class="form-floating">
                            <select class="form-select" aria-label="Floating label select example"  id="sexo"  required >
                                <option selected value="0">Elija una opcion</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                            <option value="3">No especificar</option>
                            </select>
                            <label for="floatingSelect">Sexo</label>
                        </div>

                        <div class="form-floating">
                            <select class="form-select"  aria-label="Floating label select example" id="tipo_usuario" >
                                <option selected value="0">Elija una opcion</option>
                            <option value="1">Público (Compra o Venta)</option>
                            <option value="2">Privado (Compra) </option>
                            </select>
                            <label for="floatingSelect">Usuario...</label>
                        </div>

                        <div class="form-floating">
                            <select class="form-select" aria-label="Floating label select example"  id="rol"  >
                            <option selected value="0">Elija una opcion</option>
                            <option value="1">Vendedor</option>
                            <option value="2">Cliente</option>
                            <option value="3">Administrador</option>
                            </select>
                            <label for="floatingSelect">Rol de usuario</label>
                        </div>
                        <div class="item"> 
                            <label class="nav-link px-2 " >Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="nacimiento" required> 
                        </div>

                        <div class="item"> 
                            <label class="nav-link px-2">Elija una imagen como avatar </label>
                                <input type="file" class="form-control" id="customFile" id="avatar" required> 
                        </div>
                        
                        <div class="espacio_Boton">
                            <button class="boton_Registro" type="submit"  value="Enviar">Registrate</button>
                            <p class="warnings" id="warnings"></p>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>

    <script src="js/registro.js"></script>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">Conocenos</h2>
            <p class="footer__txt">blah blah </p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Metodos de Pago</h2>
            <p class="footer__txt">blah blah </p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Contactanos</h2>
            <p class="footer__txt">Email:</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">¿Necesitas Ayuda?</h2>
            <p class="footer__txt">blah blah </p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Subscribete</h2>
            <p class="footer__txt">Registrate para recibir las ultimas ofertas 
                en tu correo electronico y comprar productos.</p>
                <input type="email" class="footer__input" placeholder="Enter your email">
        </div>
    </footer>
    <div class="Copyright"><p class="copy">© 2022, Echo</p></div>

</html>