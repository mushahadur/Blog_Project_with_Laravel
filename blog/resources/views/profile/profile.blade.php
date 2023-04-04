@extends('admin.master')
@section('body')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pt-5">
                    <img src="{{asset('/')}}uploads/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" style="width:60%; background-color: white;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  margin-bottom: 35px;">
                    <div class="container">
                        <h2 style=" padding: 10px 10px;">{{Auth::user()->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-5">
                <div class="bg-dark py-3"><h2 class="text-center text-white">All Informetion</h2></div>
                <div class="py-4"></div>
                <h3 class="pl-3">Name:  {{Auth::user()->name}}</h3><hr>
                <h4 class="pl-3">City:  {{Auth::user()->city}}</h4><hr>
                <h4 class="pl-3">Country:   {{Auth::user()->country}}</h4><hr>
                <h4 class="pl-3">Phone: {{Auth::user()->phone}}</h4><hr>
                <h4 class="pl-3">Email: {{Auth::user()->email}}</h4><hr><br>
                <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Your Profile</a>
            </div>
        </div>
    </div>
</section>
@endsection
