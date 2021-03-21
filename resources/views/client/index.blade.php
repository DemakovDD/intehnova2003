@extends('layouts.layout')

@section('title', 'Запросы клиента')

@section('content')
    <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Добавить запрос</a>
    <a href="{{ route('client.show', ['id' => $users]) }}" class="btn btn-primary mb-3">Мои запросы</a>
@endsection
