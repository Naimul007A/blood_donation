@extends('layouts.master')
@section('before_head')
    <title>User Profile - Blood Donation</title>
@endsection
@section('main')
    <div class="pb-5">
        <div class="col-12 col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="float-none float-md-start text-center pb-2 pb-md-0">
                        <h3 class="fw-bold ">User Profile</h3>
                    </div>
                    <div class="float-none float-md-end text-center">
                        <a href="{{ route('user.edit') }}/"class="btn btn1 btn-sm">
                            Update Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 m-auto pb-5">
        <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-12 col-md-4 col-lg-3 pb-4 pb-md-0">
                        @if ($user->image == '')
                            <img class="img-thumbnail mx-auto d-block" src="/images/images.png" alt="LOGO">
                        @else
                            <img class="img-thumbnail mx-auto d-block" src="/uploads/{{ $user->image }}" alt="LOGO">
                        @endif
                    </div>
                    <div class="col-12 col-md-8 col-lg-7">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><b>User Name:</b></td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Blood Group:</b></td>
                                    <td>{{ $user->Group->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone Number:</b></td>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <td><b>Email Address:</b></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td><b>User City:</b></td>
                                    <td>{{ $user->City->name }}</td>
                                </tr>
                                @if (Auth::user()->role == 2)
                                    <tr>
                                        <td><b>User State:</b></td>
                                        <td>{{ $user->state }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>User Address:</b></td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Last Donate:</b></td>
                                        <td>{{ $user->last_donate }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td><b>Account Created_at:</b></td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
