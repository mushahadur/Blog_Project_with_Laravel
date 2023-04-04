@extends('admin.master')

@section('body')



        {{--        Header and Navbar Start--}}

        <header>
            <section class="py-2 shadow" style="background-color: rgba(198,227,215,0.6);">
                <div class="container">
                    <div class="row text-secondary ">
                        <div class="col-md-6">
                            <ul class="nav">
                                <li class=" border-end pe-3 border-white">
                                    {{--                                    <a href=""><img  src="{{asset('/')}}assets/img/logo.png" alt="logo" style="height:50px;"> </a>--}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav float-end" >
                                <li class="nav-item py-2">
                                    <button type="button" class="btn btn-success end"  data-mdb-toggle="modal" data-mdb-target="#addCourseModal">
                                        Add a New Courses
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        {{--        Header and Navbar End--}}

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Add Post Form</h3>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('post.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Post Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Post Body</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
                            </div>
                        </div>



                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

