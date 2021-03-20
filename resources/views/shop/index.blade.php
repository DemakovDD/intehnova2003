@extends('layouts.layout')

@section('title', 'Магазин')

@section('content')
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label for="name">Имя запчасти</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="input-group mb-3">
            <label for="name">Имя производителя</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="input-group mb-3">
            <label for="name">Имя запчасти</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
        </div>

        <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Добавить товар</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <a href="{{ route('home') }}" class="text-center">На главную</a>
@endsection


<p>Магазин добавляет записи</p>
