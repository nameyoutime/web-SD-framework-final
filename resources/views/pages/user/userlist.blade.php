@extends('layouts.app')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data User table
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a type="button" class="btn btn-primary" href="users/create">create</a>
                        <table id="datatablesSimple" class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row"><a href="/profiles/{{$user->id}}">{{$user->id}}</a></th>
                                    <td><a href="/profiles/{{$user->id}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @switch($user->role_id)
                                            @case(1)
                                            Admin
                                            @break
                                            @case(2)
                                            Editor
                                            @break
                                            @case(3)
                                            Viewer
                                            @break
                                        @endswitch

                                    </td>
                                    <td>
                                        <form class="d-flex"
                                              method="POST">
                                            {{csrf_field()}}
                                            @if($user->status==1)
                                                <input type="submit" class="btn btn-danger" value="deactive"
                                                       formaction="/users/{{$user->id}}/deactive">
                                            @else
                                                <input type="submit" class="btn btn-primary" value="active"
                                                       formaction="/users/{{$user->id}}/active">
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy',['user' => $user->id]) }}"
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
        {{--        <x-alert type="danger"  message="demo component"/>--}}
    </main>

@endsection
