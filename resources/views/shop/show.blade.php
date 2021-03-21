@extends('layouts.layout')

@section('title', 'Запросы клиента')

@section('content')
    <a href="{{ route('detail.create') }}" class="btn btn-primary mb-3">Добавить деталь</a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список товаров</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            @if (count($products))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 30px">#</th>
                            <th>Производитель</th>
                            <th>Запчасть</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ ($product->id) == 9 }}</td>
                                <td>{{ $product->maker }}</td>
                                <td>{{ $product->detail }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Товаров в наличии нет</p>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список запросов от клиентов</h3>
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
                            @foreach($products as $product)
                                @if($order->product_id == $product->id)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->maker }}</td>
                                        <td>{{ $order->detail }}</td>
                                        <td>{{ $order->price_fr }}</td>
                                        <td>{{ $order->price_to }}</td>
                                    </tr>
                                @endif
                            @endforeach
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

