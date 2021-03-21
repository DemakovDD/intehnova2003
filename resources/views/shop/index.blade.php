@extends('layouts.layout')

@section('title', 'Запросы клиента')

@section('content')
    <a href="{{ route('detail.create', ['id' => $users]) }}" class="btn btn-primary mb-3">Добавить деталь</a>
    <a href="{{ route('detail.show', ['id' => $users]) }}" class="btn btn-primary mb-3">Запросы под детали в наличии</a>
@endsection
