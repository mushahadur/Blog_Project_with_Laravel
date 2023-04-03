




{{-- <x-app-layout>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}



                </div>
            </div>
            <section class="py-3" style="">
                <div class="" style="">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Add Post  </h3>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center text-success">
                                        <?php echo isset($message) ?$message  : ''; ?>
                                    </h4>
                                        <form action="{{route('addPost')}}" method="POST" enctype="multipart/form-data">
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
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4"> </label>
                                                <div class="col-md-3">
                                                    <input type="submit" name="btn" class="btn btn-outline-info btn-dark" value="Creat New Blog"/>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Add Image</h3>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center text-success">
                                        <?php echo isset($message) ?$message  : ''; ?>
                                    </h4>
                                        <form action="{{route('addImage')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Image Title</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="name" class="form-control"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Add Image </label>
                                                <div class="col-md-8">
                                                    <input type="file" name="image" class="form-control-file"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4"> </label>
                                                <div class="col-md-3">
                                                    <input type="submit" name="btn" class="btn btn-outline-info btn-dark" value="Add a New Image"/>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{asset('/')}}assets/js/jquery-3.4.1.min.js"></script>
        <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
</x-app-layout> --}}
