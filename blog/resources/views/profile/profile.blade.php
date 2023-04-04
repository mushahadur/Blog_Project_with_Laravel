@extends('admin.master')
@section('body')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">


                <div class="card" style="width: 25rem;">
                    <img src="{{asset('/')}}admin/assets/images/users/Official.jpg" class="card-img-top" alt="...">
                    <div class="card-header"><h1>{{Auth::user()->name}}</h1></div>
                    <div class="card-body">
                    <h3>{{Auth::user()->phone}}</h3><hr>
                    <h3>{{Auth::user()->email}}</h3><hr>
                      <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Your Profile</a>
                    </div>
                  </div>


            </div>

        </div>
    </div>
</section>
@endsection
