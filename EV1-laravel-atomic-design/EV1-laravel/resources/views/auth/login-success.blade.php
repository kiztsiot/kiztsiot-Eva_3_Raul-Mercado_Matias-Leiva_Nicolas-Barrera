@extends('layouts.app')

@section('title', 'Sesión iniciada')

@section('content')
    <x-organisms.login-success :usuario="$usuario" :token="$token" />
@endsection
