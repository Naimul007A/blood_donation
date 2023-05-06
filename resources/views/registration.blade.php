@extends('layouts.master')
@section('before_head')
    <title>User Registration - Blood Donation</title>
@endsection
@section('main')
    <div class="d-flex justify-content-center">
        <div class="card p-0 m-0" style="width: 30rem;">
            <div class="card-header text-light py-3 bg-secondary">
                <h3 class="text-center card-title">User Registration</h3>
            </div>
            <div class="card-body py-3">
                <form action="" method="post">
                    @csrf
                    <div class="py-2">
                        <label for="" class="form-label fw-bold">User Email Address</label>
                        <input type="email" name="email" placeholder="Email Addresss" class="form-control" required>
                    </div>
                    <div class="py-3">
                        <label for="" class="form-label fw-bold">User Password</label>
                        <input type="password" name="password" placeholder="User Password" class="form-control" required>

                    </div>
                    <div class="py-3">
                        <input type="submit" class="btn btn1" value="Log in">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
