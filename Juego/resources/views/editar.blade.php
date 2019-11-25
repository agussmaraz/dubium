@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class="button-title">
            <div class="cajita-button">
                <a href="creaPreguntas.php" class="button-volver">
                    <i class="fas fa-chevron-circle-left"></i>
                </a>
            </div>
            
            <div>
                <h2 class="titulo-editar">
                    La pregunta que elegiste para editar es:
                </h2>
            </div>
        </article>
        <div class="pregunta-elegida">
        </div>
        <article class="form-editar">
            <form action="" method="post">
                <div class="div-form-editar">
                    <label for="">Escriba la nueva pregunta:</label>
                    <br>
                    <input type="text" name="nuevaPregunta" class="input-editar">
                </div>
                
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta correcta:</label>
                    <br>
                    <input type="text" name="nuevaRespuesta" class="input-editar">
                </div>
                
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="respuestaFalsa1" class="input-editar">
                </div>
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="respuestaFalsa2" class="input-editar">
                </div>
                
                <div>
                    <input type="submit" value="Actualizar" class="div-button-editar">
                </div>
            </form>
        </article>
    </section>
</body>
@endsection