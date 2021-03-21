@extends('layouts.layout')

@section('title', 'Запросы клиента')

@section('content')
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label for="maker">Имя производителя</label>
            <input type="text" name="maker" class="form-control" placeholder="Производитель" value="{{ old('maker') }}">
        </div>
        <div class="input-group mb-3">
            <label for="price_fr">Цена от</label>
            <input type="text" name="price_fr" class="form-control" placeholder="Цена от" value="{{ old('price_fr') }}">
        </div>
        <div class="input-group mb-3">
            <label for="price_to">Цена до</label>
            <input type="text" name="price_to" class="form-control" placeholder="Цена до" value="{{ old('price_to') }}">
        </div>
        <div class="input-group mb-3">
            <label for="detail">Имя запчасти</label>
            <input type="text" name="detail" class="form-control" placeholder="Запчасть" value="{{ old('detail') }}">
        </div>

        <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Добавить запрос</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <a href="{{ route('client.index') }}" class="text-center">Список запросов</a>
@endsection
