@extends('layouts.app')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Order info
                </div>
                <div class="card-body d-flex justify-content-center">
                    <div class="w-25 card p-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$order->id}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    @switch($order->status)
                                        @case(1)
                                        <strong class="text-success">Success</strong>
                                        @break
                                        @case(3)
                                        <strong class="text-danger">On hold</strong>
                                        @break
                                        @default
                                        <strong >In process</strong>
                                        @break
                                    @endswitch
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Delivery date</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$order->delivery_date}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">User_id</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$order->user->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($order->products as $product )

                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->pivot->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->pivot->quantity * $product->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h1>Total price: {{$order->total}} VND</h1>
                </div>

            </div>
        </div>

    </main>
@endsection
