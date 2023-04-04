
@extends('admin.master')
@section('body')

<section>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('/')}}admin/assets/images/users/Official.jpg" class="card-img-top" alt="..." style="height: 350px; width:350px;"><br>
                <input type="file"><br>
                  <a href="{{route('profile.edit')}}" class="btn btn-primary">Save Profile Pic</a>

            </div>
        </div>
        <div class="col-md-4 px-2">
            <div class="card">
                <form action="">
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->name}}" id="horizontal-firstname-input" name="name"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->phone}}" id="horizontal-firstname-input" name="phone"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Update Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{Auth::user()->email}}" id="horizontal-firstname-input" name="email"/>
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
        <div class="col-md-4 px-2">
            <div class="card">
                <form action="">
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Current Password</label>
                        <div class="col-sm-9">
                            <input id="current_password" name="current_password" type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input id="password" name="password" type="password" class="mt-1 block w-full form-control" autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full form-control" autocomplete="new-password"/>
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
