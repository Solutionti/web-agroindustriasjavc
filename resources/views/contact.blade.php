<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>

    <Style>
        <h1{
            color: blue;   
        } 
        </style>
</head>
<body>
    <h1>correo electronico</h1>
    <p>Enviado desde web</p>
    <p><strong>Nombre</strong> {{$contacto["name"]}}</p>
    <p><strong>Correo</strong> {{$contacto["email"]}}</p>
    <p><strong>Mensaje</strong> {{$contacto["message"]}}</p>

</body>
</html>