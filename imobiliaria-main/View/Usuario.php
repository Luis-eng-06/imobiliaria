<?php

@extends('layouts.default')

@section('title','Usuarios')

@section('content')
    <h1>Usuario</h1>
    {{ $user->name}}<br/>
    {{ $user->email}}>br/>

@endsection


?>