@extends('layouts.app')

@section('title', 'Inicio de Sesión')

@section('content')
    <x-organisms.login-form :error="$error ?? null" :errors="$errors ?? null" />
@endsection
