@extends('layouts.master')
@section('before_head')
    <title>Donor list - blood donation</title>
@endsection
@section('main')
    <div class="pb-5">
        <div class="col-12 col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="float-start">
                        <h3 class="fw-bold">Donor List</h3>
                    </div>
                    <div class="float-end"><a href="{{ route('home') }}" class="btn btn1 btn-sm">Change City/Change Blood</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($donors as $donor)
        <div class="col-12 col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-12 col-md-4 col-lg-3">
                            <img class="img-thumbnail mx-auto d-block" src="/images/images.png" alt="LOGO">
                        </div>
                        <div class="col-12 col-md-8 col-lg-7">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><b>Donor Name:</b></td>
                                        <td>{{ $donor->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Blood Group:</b></td>
                                        <td>{{ $donor->blood_group }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Donor City:</b></td>
                                        <td>{{ $donor->city }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ Auth::check() ? route('user.login') : route('user.login') }}/" class="btn btn1 ">
                                Get Contact</a>
                            @guest
                                <small class="mx-2 mb-0 d-block text-danger pt-2">If you want more details about this donor
                                    please login with your
                                    account.</small>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
