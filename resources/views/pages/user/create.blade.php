@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create user</h3></div>
                        <div class="card-body">
                            <form class="user" action="{{ route('users.store') }}" method="POST">
                                @csrf
{{--                                @method('PUT')--}}
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Name" />
                                            <label for="inputFirstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Email">
                                            <label for="inputLastName">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-user" name="password" id="password" placeholder="password">
                                    <label for="inputEmail">Password</label>
                                </div>
{{--                                <div class="form-floating mb-3">--}}
{{--                                    <input type="number" class="form-control form-control-user" name="status" id="status" placeholder="Status">--}}
{{--                                    <label for="inputEmail">Status</label>--}}
{{--                                </div>--}}
{{--                                <div class="form-floating mb-3">--}}
{{--                                    <input type="number" class="form-control form-control-user" name="remember_token" id="remember_token" placeholder="Remember_token">--}}
{{--                                    <label for="inputEmail">Remember_token</label>--}}
{{--                                </div>--}}

                                <div class="mt-4 mb-0">

                                    <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Create"></div>
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
        {{--        <form class="user" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">--}}
        {{--        @csrf--}}
        {{--        @method('PUT')<!-- khai báo này dùng để thiết lập phương thức PUT--}}
        {{--									nếu không khai báo thì khi submit không thiết lập HttpPUT -->--}}

        {{--            <div class="form-group">--}}
        {{--                <input type="text" name="full_name" class="form-control form-control-user" id="full_name"--}}
        {{--                       placeholder="Full Name" value="{{$profile->full_name}}">--}}
        {{--            </div>--}}
        {{--            <div class="form-group">--}}
        {{--                <input type="text" name="address" class="form-control form-control-user" id="address"--}}
        {{--                       placeholder="Address" value="{{$profile->address}}">--}}
        {{--            </div>--}}
        {{--            <div class="form-group row">--}}
        {{--                <div class="col-sm-6 mb-3 mb-sm-0">--}}
        {{--                    <input type="date" class="form-control form-control-user" name="birthday" id="birthday"--}}
        {{--                           placeholder="Birthday" value="{{$profile->birthday}}">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <input type="submit" class="btn btn-primary" value="Update">--}}
        {{--        </form>--}}
        {{--        <a href="{{route('profile.update',['profile'=> $profile->id])}}"--}}
        {{--           class="btn btn-primary" role="button">edit</a>--}}
    </main>

@endsection
