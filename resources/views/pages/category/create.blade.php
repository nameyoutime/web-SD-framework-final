@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create category</h3>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                {{--                                @method('PUT')--}}
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="text" name="name" class="form-control form-control-user"
                                                   id="name" placeholder="Name"/>
                                            <label for="inputFirstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="description" class="form-control form-control-user"
                                                   id="description" placeholder="Description">
                                            <label for="inputLastName">Description</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-0">

                                    <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"
                                                               value="Create"></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            {{--                            <div class="small"><a href="login.html">Have an account? Go to login</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

