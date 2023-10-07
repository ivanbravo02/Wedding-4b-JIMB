<div class="d-flex justify-content-center text-center">

  <img class="card-img-top" src="holder.js/100px180/" alt=""> </img>
  <ul class="main-menu">
            <li class="active">
               <a href="index.php">Home</a>
            </li>
  </ul>
</div>
<html>
<head>
<form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" id="email" name="ingresoEmail">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Contrasena:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Contraseña" id="pwd" name="ingresoPassword">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</head>
    <style>
        form {
            background-color: #f5f5f5;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            margin: 0 auto;
            background-size: cover;
            align-items: center;
            justify-content: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        img {
            background-image: url("https://cdn0.bodas.net/article-real-wedding/635/original/1280/jpg/3338167.jpeg"); /* Hace que la imagen sea un bloque para centrarla */
            margin: 0 auto;
            width: 0 auto;
            padding: 100px 300px;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    