<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

@extends('layouts.plantilla')

@section('title','Cursos '.$curso)

@section('content')
<h1> CURSO LLAMADO {{$curso}}</h1>
@endsection