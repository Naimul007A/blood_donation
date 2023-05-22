@extends('layouts.master')
@section('before_head')
    <title>Donor list - blood donation</title>
@endsection
@section('main')
    <div class="pb-5">
        <div class="col-12 col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="float-none float-md-start text-center pb-2 pb-md-0">
                        <h3 class="fw-bold ">Donor List</h3>
                    </div>
                    <div class="float-none float-md-end text-center">
                        <a href="{{ route('home') }}"class="btn btn1 btn-sm">
                            Change City/Change Blood
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (count($donors) > 0)
        @foreach ($donors as $donor)
            @if (Auth::check())
                @if ($donor->id !== Auth::user()->id)
                    <div class="col-12 col-md-10 m-auto pb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="col-12 col-md-4 col-lg-3 pb-4 pb-md-0">
                                        @if ($donor->image == '')
                                            <img class="img-thumbnail mx-auto d-block" src="/images/images.png"
                                                alt="LOGO">
                                        @else
                                            <img class="img-thumbnail mx-auto d-block" src="/uploads/{{ $donor->image }}"
                                                alt="LOGO">
                                        @endif
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
                                                    <td>{{ $donor->Group->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Donor City:</b></td>
                                                    <td>{{ $donor->City->name }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{ Auth::check() ? route('profile.donor', $donor->id) : route('user.login') }}/"
                                            class="btn btn1 ">
                                            Get Contact</a>
                                        @guest
                                            <small class="mx-2 mb-0 d-block text-danger pt-2">If you want more details about
                                                this
                                                donor
                                                please login with your
                                                account.</small>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @if (count($donors) == 1)
                        <div class="col-12 col-md-10 m-auto ">
                            <div class="card p-4">
                                <h5 class="text-center fw-bold">No Record Found !</h5>
                                <p class="text-danger text-center">Please Contact Our Team For Manage Blood. <a
                                        href="">Contact
                                        Now</a></p>
                            </div>
                        </div>
                    @endif
                @endif
            @else
                <div class="col-12 col-md-10 m-auto pb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-12 col-md-4 col-lg-3 pb-4 pb-md-0">
                                    @if ($donor->image == '')
                                        <img class="img-thumbnail mx-auto d-block" src="/images/images.png" alt="LOGO">
                                    @else
                                        <img class="img-thumbnail mx-auto d-block" src="/uploads/{{ $donor->image }}"
                                            alt="LOGO">
                                    @endif
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
                                                <td>{{ $donor->Group->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Donor City:</b></td>
                                                <td>{{ $donor->City->name }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{ Auth::check() ? route('profile.donor', $donor->id) : route('user.login') }}/"
                                        class="btn btn1 ">
                                        Get Contact</a>
                                    @guest
                                        <small class="mx-2 mb-0 d-block text-danger pt-2">If you want more details about this
                                            donor
                                            please login with your
                                            account.</small>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else
        <div class="col-12 col-md-10 m-auto ">
            <div class="card p-4">
                <h5 class="text-center fw-bold">No Record Found !</h5>
                <p class="text-danger text-center">Please Contact Our Team For Manage Blood. <a href="">Contact
                        Now</a></p>
            </div>
        </div>
    @endif
@endsection
