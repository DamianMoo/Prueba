<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <img src="2.png" alt="a">
                <h3>Bienvenido</h3>
                <form action="a.php" method="POST">
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" id="email" class="input-control">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" id="password" class="input-control">
                        <div class="input-link">

                            <a href="contraseña.php" class="gradient-text">Has olvidado tu contraseña?</a>
                        </div>
                    </div><br>
             

                    <button class="btn" name="login" id="login" value="Login" type="submit">Iniciar Sesión</button>
                </form>
                <p>No tienes una cuenta?  <a href="registro.php" class="gradient-text"> Crear Cuenta</a></p>
            </div>
        </div>
    </section>
</body>
</html>
