@extends('layouts.master')
@section('before_head')
    <title>User Registration - Blood Donation</title>
@endsection
@section('main')
    <div class="d-flex justify-content-center">
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
    </div>
    <div class="d-flex justify-content-center">
        <div class="card p-0 m-0" style="width: 30rem;">
            <div class="card-header text-light py-3 bg-secondary">
                <h3 class="text-center card-title">User Registration</h3>
            </div>
            <div class="card-body py-3">
                <form action="{{ route('user.registrationProccess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">Full Name:</label>
                        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"
                            class="form-control" required>
                    </div>
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">Email Address:</label>
                        <input type="email" name="email" placeholder="Email Addresss" value="{{ old('email') }}"
                            class="form-control" required>
                    </div>
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">Phone Number:</label>
                        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}"
                            class="form-control" required>
                    </div>
                    <div class="py-3">
                        <label for="" class="form-label fw-bold">Password:</label>
                        <input type="password" name="password" placeholder="User Password" value="{{ old('password') }}"
                            class="form-control" required>
                    </div>
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">Profile Photo(<span
                                class="text-danger">optional</span>):</label>
                        <input type="file" name="profile" class="form-control">
                    </div>
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">Blood Group:</label>
                        <select class="form-select" name="group" id="">
                            <option value="0">Select Blood Group</option>
                            @foreach ($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">City:</label>
                        <select class="form-select" name="city" id="">
                            <option value="0">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="py-2">
                        <div class="form-check fs-5 text-danger">
                            <input class="form-check-input" type="checkbox" name="donor" value="1" id="donate-check">
                            <label class="form-check-label" for="donate-check">
                                Do you want to donate blood ?
                            </label>
                        </div>
                    </div>
                    <div class="py-3">
                        <input type="submit" class="btn btn1" value="Sing Up">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
