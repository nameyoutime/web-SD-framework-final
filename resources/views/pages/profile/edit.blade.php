@extends('layouts.app')
@section('content')
    <main>
        <!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
                <li>{{ $message }}  </li>
                @if ($message = Session::get('file'))
                    <li>{{ $message }}  </li>
                @endif

            </div>
        @endif

    <!-- lấy thông tin lỗi khi validate hiển thị trên màn hình -->
        @if (count($errors) > 0)
            <div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
{{--                <li>{{ $message }}  </li>--}}
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update user</h3></div>
                        <div class="card-body">
                            <form class="user" action="{{ route('profiles.update',['profile' => $profile->id]) }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating mb-3 d-flex justify-content-center">

                                    <img src="{{$profile->avatar}}"
                                         alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="text" name="full_name" class="form-control form-control-user"
                                                   id="full_name" placeholder="Full Name"
                                                   value="{{$profile->full_name}}"/>
                                            <label for="inputFirstName">Full name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="address" class="form-control form-control-user"
                                                   id="address" placeholder="Address" value="{{$profile->address}}">
                                            <label for="inputLastName">Address</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-user" name="email" id="email"
                                           placeholder="email" value="{{$user->email}}">
                                    <label for="inputEmail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="role" id="role" class="form-control">
                                        <option value=1 {{$user->role_id==1 ? 'selected' : ''}}>admin</option>
                                        <option value=2 {{$user->role_id==2 ? 'selected' : ''}}>editor</option>
                                        <option value=3 {{$user->role_id==3 ? 'selected' : ''}}>viewer</option>
                                    </select>
{{--                                    <input type="number" class="form-control form-control-user" name="role" id="role"--}}
{{--                                           placeholder="Role" value="{{$user->role_id}}">--}}
                                    <label for="inputEmail">Role</label>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control form-control-user" name="birthday"
                                           id="birthday" placeholder="Birthday" value="{{$profile->birthday}}">
                                    <label for="inputEmail">Birthday</label>
                                </div>


{{--                                <div class="form-floating mb-3">--}}

{{--                                    <input type="text" class="form-control form-control-user" name="avatar" id="avatar"--}}
{{--                                           placeholder="Birthday" value="{{$profile->avatar}}">--}}
{{--                                    <label for="inputEmail">Avatar</label>--}}
{{--                                </div>--}}
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="avatar" name="avatar">
                                    <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>
                                </div>
                                <div class="mt-4 mb-0">

                                    <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"
                                                               value="Update"></div>
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
{{--    <div id="test" style="background-color: black">--}}
{{--        sidebar--}}
{{--    </div>--}}
@endsection
@section('js')
    <script>
        // $("#test").css("background-color", "yellow");
        // console.log('fileName');
        $('#avatar').on('change', function () {
            //get the file name
            let fileName = $(this).val();
            console.log(fileName);
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection('js')
