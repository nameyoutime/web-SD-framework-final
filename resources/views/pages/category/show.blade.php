@extends('layouts.app')
@section('content')
    <main>
        <section style="background-color: #eee;height: 100vh">
            <div class="container py-5">

                <div class="row">

                    <div class="card mb-4">
                        <div class="card-body">
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="card mb-4">--}}
{{--                                    <div class="card-body text-center">--}}

{{--                                        <h5 class="my-3">{{$category->name}}</h5>--}}
{{--                                        --}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$category->id}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$category->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$category->description}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end mb-2">
                                <div><a href="{{ route('categories.edit',['category' => $category->id]) }}"
                                        class="btn btn-primary" role="button">edit</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="card">

                        <div class="card-body">
                            <h1>Products</h1>

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
                                @foreach($category->products as $product )
                                    <tr>
                                        <td><a href="/products/{{$product->id}}">{{$product->id}}</a></td>
                                        <td>{{$product->name}}</td>
                                        <td class="text-truncate" style="max-width: 150px;">{{$product->description}}</td>

                                        <td>
                                            <form action="{{ route('products.destroy',['product' => $product->id]) }}"
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
            </div>
        </section>
    </main>

@endsection
