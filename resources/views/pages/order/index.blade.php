@extends('layouts.app')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">

                    <form class="user" action="{{ url('/orders/dateTo') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="date" name="from" class="form-control form-control-user" id="from" placeholder="From">

                                    <label for="From">From</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" name="to" class="form-control form-control-user" id="to" placeholder="From">

                                    <label for="To">To</label>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">

                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Search"></div>
                            </div>
                        </div>
                </div>
                </form>
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
                        <th>Id</th>
                        <th>User name</th>
                        <th>Delivery_date</th>
                        <th>Total</th>
                        <th>Status</th>

                        <th>Function</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>User name</th>
                        <th>Delivery_date</th>
                        <th>Total</th>
                        <th>Status</th>

                        <th>Function</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($orders as $order )
                        <tr>
                            <td><a href="/orders/{{$order->id}}">{{$order->id}}</a></td>
                            <td><a href="/profiles/{{$order->user->id}}">{{$order->user->name}}</a></td>
                            <td>{{$order->delivery_date}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                @switch($order->status)
                                    @case(1)
                                    <strong class="text-success">Success</strong>
                                    @break
                                    @case(3)
                                    <strong class="text-danger">On hold</strong>
                                    @break
                                    @default
                                    <strong>In process</strong>
                                    @break
                                @endswitch

                            </td>

                            <td>
                                <form class="d-flex"
                                      method="POST">
                                    {{csrf_field()}}

                                    <input type="submit" class="btn btn-primary" value="In process"
                                           formaction="/orders/{{$order->id}}/0">
                                    <input type="submit" class="btn btn-success" value="Success"
                                           formaction="/orders/{{$order->id}}/1">
                                    <input type="submit" class="btn btn-danger" value="On hold"
                                           formaction="/orders/{{$order->id}}/3">


                                </form>
                            </td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </main>
    {{--    <ul>--}}


    {{--        @foreach($orders as $order )--}}
    {{--            <li>--}}


    {{--                {{$order->id}}- {{$order->total}}--}}

    {{--            </li>--}}
    {{--        @endforeach--}}

    {{--    </ul>--}}

@endsection
