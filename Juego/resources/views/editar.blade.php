@extends('layouts.plantillaA')
@section('contenido')
<body>
    <section class="container">
        <article class="button-title">
            <div class="cajita-button">
                <a href="/crea" class="button-volver">
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
            <h4>
                " {{$preguntas->pregunta}}  "
            </h4>
        </div>
        <article class="form-editar">
            <form action="" method="post">
                @csrf
                <div class="div-form-editar">
                    <label for="">Escriba la nueva pregunta:</label>
                    <br>
                    <input type="text" name="pregunta" class="input-editar">
                </div>
                
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta correcta:</label>
                    <br>
                    <input type="text" name="correcta" class="input-editar" value="">
                </div>
                
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="falsa1" class="input-editar">
                </div>
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="falsa2" class="input-editar">
                </div>
                
                <div>
                    <input type="submit" value="Actualizar" class="div-button-editar">
                </div>
            </form>
        </article>
    </section>
</body>
@endsection