@extends('layouts.layout')

@section('title', 'Запросы клиента')

@section('content')
    <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Добавить запрос</a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список запросов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            @if (count($orders))
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 30px">#</th>
                        <th>Производитель</th>
                        <th>Запчасть</th>
                        <th>Цена от:</th>
                        <th>Цена до:</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->maker }}</td>
                            <td>{{ $order->detail }}</td>
                            <td>{{ $order->price_fr }}</td>
                            <td>{{ $order->price_to }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p>Запросов пока нет...</p>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
@endsection
