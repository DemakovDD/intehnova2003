@extends('layouts.layout')

@section('title', 'Магазин')

@section('content')
    <form action="{{ route('detail.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label for="detail">Имя запчасти</label>
            <input type="text" name="detail" class="form-control" placeholder="Detail" value="{{ old('detail') }}">
        </div>
        <div class="input-group mb-3">
            <label for="maker">Имя производителя</label>
            <input type="text" name="maker" class="form-control" placeholder="Maker" value="{{ old('maker') }}">
        </div>
        <div class="input-group mb-3">
            <label for="shop">Имя магазина</label>
            <input type="text" name="shop" class="form-control" placeholder="Shop" value="{{ old('shop') }}">
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Добавить товар</button>
            </div>
        </div>
    </form>
    <a href="{{ route('detail.index') }}" class="text-center">Список товаров</a>
@endsection


<p>Магазин добавляет записи</p>
