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
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update product</h3></div>
                        <div class="card-body">
                            <form class="user" action="{{ route('products.update',['product' => $product->id]) }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating mb-3 d-flex justify-content-center">
                                    <img src="{{$product->image}}"
                                         alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input type="text" name="name" class="form-control form-control-user"
                                                   id="name" placeholder="Name"
                                                   value="{{$product->name}}"/>
                                            <label for="inputFirstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="description" class="form-control form-control-user"
                                                   id="description" placeholder="Description" value="{{$product->description}}">
                                            <label for="inputLastName">Description</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-user" name="quantity" id="quantity"
                                           placeholder="quantity" value="{{$product->quantity}}">
                                    <label for="inputEmail"></label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control form-control-user" name="price"
                                           id="price" placeholder="price" value="{{$product->price}}">
                                    <label for="inputEmail">price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-control" id="cate_id" name="cate_id" value="{{$product->category->name}}" >
{{--                                        <option value="xyz">xyz</option> /* set default option value */--}}
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $product->cate_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach

{{--                                        @foreach($categories as $cate)--}}
{{--                                            <option value="{{$cate->id}}">{{$cate->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <label for="inputEmail">Category</label>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="image" name="image">
                                    <label for="image" class="custom-file-label">{{$product->image}}</label>
                                </div>
                                <div class="mt-4 mb-0">

                                    <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"
                                                               value="Update"></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@section('js')
    <script>
        // $("#test").css("background-color", "yellow");
        // console.log('fileName');
        $('#image').on('change', function () {
            //get the file name
            let fileName = $(this).val();
            console.log(fileName);
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection('js')
