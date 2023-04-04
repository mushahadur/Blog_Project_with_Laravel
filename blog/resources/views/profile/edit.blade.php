
@extends('admin.master')
@section('body')

<section class="py-3">
                @if (session()->has('status'))
                    <p class="text-success">Password  Upadate Successfully !</p>
                    @elseif (session()->has('statusProfile'))
                        <p class="text-success">  Upadate Profile Successfully !</p>
                @endif

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="{{asset('/')}}uploads/{{Auth::user()->image}}" class="card-img-top" alt="{{Auth::user()->name}}" style="height: 360px; width:370px;"><br>
               <h3 class="text-center py-3">{{Auth::user()->name}}</h3>

            </div>
        </div>

        {{-- This is Update Info --}}
        <div class="col-md-4 ">

                <form action="{{route('profile.update')}}" method="POST" class="mx-3" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->name}}" id="horizontal-firstname-input" name="name"/>
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update City</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->city}}" id="horizontal-firstname-input" name="city"/>
                                @error('city')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Country</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->country}}" id="horizontal-firstname-input" name="country"/>
                            @error('country')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->phone}}" id="horizontal-firstname-input" name="phone"/>
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->email}}" id="horizontal-firstname-input" name="email" disabled/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control"  id="horizontal-firstname-input" name="image" />
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Save</button>
                            </div>
                        </div>
                    </div>

                </form>

        </div>

        {{-- This is Update Password --}}
        <div class="col-md-4 px-2">
                <form method="post" action="{{ route('password.update') }}" class="pl-3">
                    @csrf
                    @method('put')

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Current Password</label>
                        <div class="col-sm-9">
                            <input id="current_password" name="current_password" type="password" class="form-control" />
                            @error('current_password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input id="password" name="password" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Confirmation Password</label>
                        <div class="col-sm-9">
                            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full form-control" autocomplete="new-password"/>
                            @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>





</section>
@endsection








{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
