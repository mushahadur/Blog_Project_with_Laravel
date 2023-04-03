@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Add Image Form</h3>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('image.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Image Name</label>
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



                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Image</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

