@extends('layouts.master')
@section('before_head')
    <title>User Profile Edit - Blood Donaiton</title>
@endsection
@section('main')
    <div>

        <div class="col-12 col-md-8 col-lg-6 m-auto">
            <div class="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @if ($errors->count() == 1)
                            {{ $errors->first() }}
                        @else
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-{{ session('type') }}">
                        <b> {{ session('message') }}</b>
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header bg-secondary p-3">
                    <h3 class="fw-bold text-center text-light">User Profile Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="py-2">
                            <label for="" class="form-label"><b>Name:</b></label>
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Email Address:</b></label>
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Phone Number:</b></label>
                            <input class="form-control" type="text" name="phone" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Blood Group:</b></label>
                            <select class="form-select" name="group" id="">
                                <option value="null">Select Blood Group</option>
                                @foreach ($groups as $group)
                                    <option {{ Auth::user()->group_id == $group->id ? 'selected' : '' }}
                                        value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>City :</b></label>
                            <select class="form-select" name="city" id="">
                                <option value="null">Select City</option>
                                @foreach ($cities as $city)
                                    <option {{ Auth::user()->city_id == $city->id ? 'selected' : '' }}
                                        value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if (Auth::user()->role == 2)
                            <div class="py-2">
                                <label for="" class="form-label"><b>State:</b></label>
                                <input class="form-control" type="text" name="state"
                                    value="{{ Auth::user()->state }}">
                            </div>
                            <div class="py-2">
                                <label for="" class="form-label"><b>Address:</b></label>
                                <textarea class="form-control" name="address" id="">{{ Auth::user()->address }}</textarea>
                            </div>
                            <div class="py-2">
                                <label for="" class="form-label"><b>Profile Photo:</b></label>
                                <input type="file" name="profile" class="form-control">
                                <input type="hidden" value="{{ Auth::user()->image }}" name="old_profile">
                            </div>
                            <div class="py-2">
                                <label for="" class="form-label"><b>Last donate:</b></label>
                                <input type="date" class="form-control" name="date"
                                    value="{{ Auth::user()->last_donate }}">
                            </div>
                        @endif
                        @if (Auth::user()->role == 0)
                            <div class="py-2">
                                <div class="form-check fs-5 text-danger">
                                    <input class="form-check-input" type="checkbox" name="donor" value="1"
                                        id="donate-check">
                                    <label class="form-check-label" for="donate-check">
                                        Do you want to donate blood ?
                                    </label>
                                </div>
                            </div>
                        @endif
                        <div class="py-2">
                            <input type="submit" class="btn btn1" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
