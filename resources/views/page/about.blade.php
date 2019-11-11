<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('header', 'Eto Header Maketa /views//layouts/app.blade s tekstom is /page/about view file\'a')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>Zagolovok /about</h1>
    <p>top content from /page/about view file</p>
@endsection
