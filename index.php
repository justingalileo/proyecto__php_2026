<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Página de Justin Hidalgo</title>

<style>

body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.tarjeta{
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,0.3);
    max-width:400px;
    transition:transform 0.3s;
}

.tarjeta:hover{
    transform:translateY(-10px);
}

h1{
    color:#333;
    margin-bottom:25px;
}

img{
    width:250px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

p{
    color:#666;
    margin-top:15px;
    font-size:15px;
}

</style>
</head>

<body>

<div class="tarjeta">

<h1>
<?php
echo "Hola, Mundo. Soy Justin Hidalgo";
?>
</h1>

<img src="imagen.png" alt="Imagen generada con IA">

<p>Bienvenido a mi primera página creada con IA.</p>

</div>

</body>
</html>