@extends('layouts.app')
@section('content')
    <main>
        <section style="background-color: #eee;height: 100vh">
            <div class="container py-5">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center">
                                    <img src="{{$product->image}}"
                                         alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                </div>

                                <h5 class="my-3">{{$product->name}}</h5>
                                <div class="d-flex justify-content-center mb-2">
                                    <div><a href="{{ route('products.edit',['product' => $product->id]) }}"
                                            class="btn btn-primary" role="button">edit</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">ID</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->id}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->name}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Description</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->description}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Quantity</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->quantity}}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Price</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->price}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Category</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->category->name}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Image link</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$product->image}}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
