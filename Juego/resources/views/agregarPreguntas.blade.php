<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/agregarPreguntas" method="POST">
        @csrf
        <div>
            <label for="Pregunta"> Pregunta:</label>
            <input type="text" name="pregunta">
        </div>
        <div>
            <label for="Respuesta1"> Respuesta correcta:</label>
            <input type="text" name="correcta">
        </div>
        <div>
            <label for="Respuesta2"> Respuesta incorrecta</label>
            <input type="text" name="falsa1">
        </div>
        <div>
            <label for="Respuesta3"> Respuesta incorrecta</label>
            <input type="text" name="falsa2">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>