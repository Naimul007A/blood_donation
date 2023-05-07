@extends('layouts.master')
@section('before_head')
    <title>Donor Profile - Blood Donation</title>
@endsection
@section('main')
    <div class="col-12 col-md-10 m-auto pb-5">
        <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-12 col-md-4 col-lg-3 pb-4 pb-md-0">
                        @if ($donor->image == '')
                            <img class="img-thumbnail mx-auto d-block" src="/images/images.png" alt="LOGO">
                        @else
                            <img class="img-thumbnail mx-auto d-block" src="/uploads/{{ $donor->image }}" alt="LOGO">
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
                                    <td><b>Phone Number:</b></td>
                                    <td>{{ $donor->phone }}</td>
                                </tr>
                                <tr>
                                    <td><b>Email Address:</b></td>
                                    <td>{{ $donor->email }}</td>
                                </tr>
                                <tr>
                                    <td><b>Donor City:</b></td>
                                    <td>{{ $donor->City->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Donor State:</b></td>
                                    <td>{{ $donor->City->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Donor Address:</b></td>
                                    <td>{{ $donor->address }}</td>
                                </tr>
                                <tr>
                                    <td><b>Last Donate:</b></td>
                                    <td>{{ $donor->last_donate }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
