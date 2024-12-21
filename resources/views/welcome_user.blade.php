@extends('layouts.header')
@extends('layouts.footer')

@section('header')
<div class="container">
    <h1>Hola, {{ Auth::user()->nombre }}!</h1>
    <p>Bienvenido a la aplicación.</p>
</div>
@section('footer')
@endsection