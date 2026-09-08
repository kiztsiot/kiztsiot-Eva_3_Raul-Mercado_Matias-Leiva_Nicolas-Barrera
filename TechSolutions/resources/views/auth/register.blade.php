@extends('layouts.app')

@section('title', 'Registro de Usuario')

@section('content')
    <x-organisms.register-form :errors="$errors ?? null" />
@endsection
