@extends('layouts.app')

@section('titulo', 'Minha página - Filho')

@section('barralateral')
    @parent
    <p>E essta parte é do filho</p>
@endsection

@section('conteudo')
    <p>Este é o conteudo do filho</p>
@endsection