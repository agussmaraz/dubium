@extends('layouts.plantillaA')
@section('contenido')
<section class="container">
    <article>
        <p class="titulo--crea"> Creá tus propias preguntas! </p>
        <form action="" method="post" class="contenedor--form">
            <div class="cajas--form">
                <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                <input type="text" name="pregunta" class="preguntainput--crea">
            </div>
            <div class="cajas--form">
                <h3 class="subtitulos--crea2"> Escribi la respuesta: </h3>
                <input type="text" name="respuesta1" placeholder="Escribi una respuesta" class="respuesta--crea">
                <br>
                <input type="text" name="respuestaCorrecta" placeholder="Escribi la respuesta correcta" class="respuesta--crea">
                <br>
                <input type="text" name="respuesta2" placeholder="Escribi una respuesta" class="respuesta--crea">
                
                <input type="submit" value="Guardar" class="boton--crea">
                
            </div>
            <div class="cajas--form">
                <h3 class="subtitulos--crea3">Selecciona el tema:</h3>
                <label for="tema" class="tematica--crea">
                    <p> Muerte subita</p>
                </label>
                <input type="radio" name="#">
            </div>            
        </form>
    </article>
    <p class="subtitulo--crea"> Mis preguntas</p>
    
    <article class="crud ">
        <table class="table text-light table-bordered ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="p-crud">Pregunta</th>
                    <th scope="col" class="r-crud">Respuesta correcta</th>
                    <th scope="col" class="i-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta</th>
                    <th scope="col" class="e-crud">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_SESSION['id'])) : ?>
                <?php $id = $_SESSION['id'];
                $consultaPregunta = BaseDato::consultar('*', 'preguntas, respuestas', "preguntas.usuario_id = '$id' and preguntas.respuesta_id = respuestas.id");
                ?>
                <?php foreach ($consultaPregunta as $key => $value) : ?>
                <tr>
                    <th scope="row"><?= $value['pregunta']; ?></th>
                    <td><?= $value['correcta']; ?></td>
                    <td><?= $value['falsa1']; ?></td>
                    <td><?= $value['falsa2'] ?></td>
                    <?php $pregunta = $value['id']; ?>
                    <td> <a href="editar.php?pregunta=<?= $pregunta; ?>"><i class="fas fa-edit"></i></a>
                        <a href="eliminar.php?pregunta=<?= $pregunta; ?>"><i class="fas fa-trash"></i></a></td>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tr>
                </tbody>
            </table>
        </article>
        
    </section>
    @endsection
    
    