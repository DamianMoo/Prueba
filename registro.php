<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registro.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Registrate!</h1>
<form action="registrador.php" method="post">
<div class="mb-3">
<label for="exampleInputEmaill" class="form-label" >usuario</1abel>
<input type="text" name="username" class="form-control"  id="exampleInputEmaill" aria-describedby="emailHelp">
</div>
<div class="mb">
<label for="exanpleInputEmaill" class="form-label">coreo electronico</label>
<input type="email" name="email" class="form-control" id="exanpleInputEmaill">
</div>

<div class="mb-3">
<label for="exampleInputEmaill" class="form-label" >Password</1abel>
<input type="int" name="password" class="form-control" id="exampleInputPasswordl">
</div>

<button type="submit" class="btn btn-primary">Registrar</button>
</form>
<div class="iniciasesion"> 
  <p class="form-label">Inicia sesion aqui!</p>
  <button onclick="location.href='login.php'" class="btn btn-primary">login</button>
</div>
</div>
</body>
</html>

