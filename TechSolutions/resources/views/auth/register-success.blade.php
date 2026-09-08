@extends('layouts.app')

@section('title', 'Registro exitoso')

@section('content')
    <x-organisms.register-success :usuario="$usuario" />
@endsection
