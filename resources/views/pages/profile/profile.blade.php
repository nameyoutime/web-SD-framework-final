@extends('layouts.app')
@section('content')
    <main>
        {{--        <div class="container-fluid">--}}
        {{--            <div class="card mb-4">--}}
        {{--                <div class="card-header">--}}
        {{--                    <i class="fas fa-table mr-1"></i>--}}
        {{--                    Data User table--}}
        {{--                </div>--}}
        {{--                <div class="card-body">--}}
        {{--                    <table id="datatablesSimple" class="table table-bordered" width="100%" cellspacing="0">--}}
        {{--                        <thead>--}}
        {{--                        <tr>--}}
        {{--                            <th>Id</th>--}}
        {{--                            <th>Name</th>--}}
        {{--                            <th>Email</th>--}}
        {{--                            <th>Email_verified_at</th>--}}
        {{--                            <th>Function</th>--}}

        {{--                        </tr>--}}
        {{--                        </thead>--}}
        {{--                        <tfoot>--}}
        {{--                        <tr>--}}
        {{--                            <th>Id</th>--}}
        {{--                            <th>Name</th>--}}
        {{--                            <th>Email</th>--}}
        {{--                            <th>Email_verified_at</th>--}}
        {{--                            <th>Function</th>--}}

        {{--                        </tr>--}}
        {{--                        </tfoot>--}}
        {{--                        <tbody>--}}
        {{--                        <tr>--}}
        {{--                            <th scope="row">{{$profile->id}}</th>--}}
        {{--                            <td>{{$profile->full_name}}</td>--}}
        {{--                            <td>{{$profile->address}}</td>--}}
        {{--                            <td> {{$profile->birthday}}</td>--}}
        {{--                            <td><a href="{{ route('profiles.edit',['profile' => $profile->id]) }}" class="btn btn-primary" role="button">edit</a>--}}
        {{--                            </td>--}}
        {{--                            <td><a href="{{route('profile.edit',['profile'=> $profile->id])}}"--}}
        {{--                                   class="btn btn-primary" role="button">edit</a>--}}
        {{--                            </td>--}}
        {{--                        </tr>--}}

        {{--                        </tbody>--}}
        {{--                    </table>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <section style="background-color: #eee;height: 100vh">
            <div class="container py-5">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center">

                                    <img src="{{$profile->avatar}}"
                                         alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                </div>
                                <h5 class="my-3">{{$profile->full_name}}</h5>
                                {{--                                <p class="text-muted mb-1">Full Stack Developer</p>--}}
                                {{--                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>--}}
                                <div class="d-flex justify-content-center mb-2">
                                    <div><a href="{{ route('profiles.edit',['profile' => $profile->id]) }}"
                                            class="btn btn-primary" role="button">edit</a></div>
                                    {{--                                    <button type="button" class="btn btn-outline-primary ms-1">Message</button>--}}
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="card mb-4 mb-lg-0">--}}
                        {{--                            <div class="card-body p-0">--}}
                        {{--                                <ul class="list-group list-group-flush rounded-3">--}}
                        {{--                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                        {{--                                        <i class="fas fa-globe fa-lg text-warning"></i>--}}
                        {{--                                        <p class="mb-0">https://mdbootstrap.com</p>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                        {{--                                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>--}}
                        {{--                                        <p class="mb-0">mdbootstrap</p>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                        {{--                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>--}}
                        {{--                                        <p class="mb-0">@mdbootstrap</p>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                        {{--                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>--}}
                        {{--                                        <p class="mb-0">mdbootstrap</p>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">--}}
                        {{--                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>--}}
                        {{--                                        <p class="mb-0">mdbootstrap</p>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">ID</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$profile->id}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$profile->full_name}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$profile->address}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Birthday</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$profile->birthday}}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$user->email}}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Roles</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            @switch($user->role_id)
                                                @case (1)
                                                    admin
                                                @break
                                                @case (2)
                                                editor
                                                @break
                                                @case (3)
                                                viewer
                                                @break
                                            @endswitch

                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Avatar link</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{$profile->avatar}}</p>
                                    </div>
                                </div>
                                <hr>

                                {{--                                <div class="row">--}}
                                {{--                                    <div class="col-sm-3">--}}
                                {{--                                        <p class="mb-0">Address</p>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-sm-9">--}}
                                {{--                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-6">--}}
                        {{--                                <div class="card mb-4 mb-md-0">--}}
                        {{--                                    <div class="card-body">--}}
                        {{--                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status--}}
                        {{--                                        </p>--}}
                        {{--                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>--}}
                        {{--                                        <div class="progress rounded mb-2" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-6">--}}
                        {{--                                <div class="card mb-4 mb-md-0">--}}
                        {{--                                    <div class="card-body">--}}
                        {{--                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status--}}
                        {{--                                        </p>--}}
                        {{--                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>--}}
                        {{--                                        <div class="progress rounded" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>--}}
                        {{--                                        <div class="progress rounded mb-2" style="height: 5px;">--}}
                        {{--                                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"--}}
                        {{--                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
