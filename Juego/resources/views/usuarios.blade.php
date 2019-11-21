@extends('layouts.plantillaA')
@section('contenido')
{{$usuarios[3]->nombre}}
{{$usuarios[3]->pregunta[0]['pregunta']}}
 
@endsection
