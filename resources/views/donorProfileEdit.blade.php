@extends('layouts.master')
@section('before_head')
    <title>User Profile Edit - Blood Donaiton</title>
@endsection
@section('main')
    <div>
        <div class="col-12 col-md-8 col-lg-6 m-auto">
            <div class="card">
                <div class="card-header bg-secondary p-3">
                    <h3 class="fw-bold text-center text-light">User Profile Edit</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
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
                            <input class="form-control" type="text" name="email" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Blood Group:</b></label>
                            <select class="form-select" name="group" id="">
                                <option value="null">Select Blood Group</option>
                            </select>
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>City :</b></label>
                            <select class="form-select" name="city" id="">
                                <option value="null">Select City</option>
                            </select>
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>State:</b></label>
                            <input class="form-control" type="text" name="state" value="{{ Auth::user()->state }}">
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Address:</b></label>
                            <textarea class="form-control" name="address" id="">{{ Auth::user()->address }}</textarea>
                        </div>
                        <div class="py-2">
                            <label for="" class="form-label"><b>Last donate:</b></label>
                            <input type="date" class="form-control" name="date"
                                value="{{ Auth::user()->last_donate }}">
                        </div>
                        <div class="py-2">
                            <input type="submit" class="btn btn1" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
