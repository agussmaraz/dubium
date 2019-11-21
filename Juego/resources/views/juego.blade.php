<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul type="none">
        
        <li>
            Usuario: {{$pregunta->user['nombre']}}
        </li>
        <br>
        <li>
            Pregunta:   {{$pregunta->pregunta}}
        </li>  
        
        <br>
        Respuestas:
        
        <li>
            A:    {{$respuestas[0]}}
        </li>
        <li>
            B:   {{$respuestas[1]}}
        </li>
        <li>
            C:    {{$respuestas[2]}}
        </li>
    </ul>
</body>
</html>