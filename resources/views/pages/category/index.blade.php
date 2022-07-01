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
                    DataTables is a third party plugin that is used to generate the demo table below. For more
                    information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                {{--                <img src="/img/default-product-image.png" alt="">--}}
                <div class="card-body">
                    <a type="button" class="btn btn-primary" href="/categories/create">add</a>
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>

                            <th>Function</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>

                            <th>Function</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($categories as $cate )
                            <tr>
                                <td><a href="/categories/{{$cate->id}}">{{$cate->id}}</a></td>
                                <td>{{$cate->name}}</td>
                                <td class="text-truncate" style="max-width: 150px;">{{$cate->description}}</td>

                                <td>
                                    <form action="{{ route('categories.destroy',['category' => $cate->id]) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
