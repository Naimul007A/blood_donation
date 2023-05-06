@extends('layouts.master')
@section('main')
    <div class="text-center pb-4 site-logo">
        <img src="/images/blood.jpg" alt="LOGO">
    </div>
    <div class="row">
        <div class="col-12 col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-5 py-2">
                                    <div class="form-group">
                                        <label for="" class="form-label fw-bold">City</label>
                                        <select name="city" id="" class="form-select">
                                            <option value="0" selected>Select City</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Bogura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 py-2">
                                    <div class="form-group">
                                        <label for="" class="form-label fw-bold">Blood Group</label>
                                        <select name="group" id="" class="form-select">
                                            <option value="0" selected>Select Blood Group</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 pt-4 mt-3">
                                    <input type="submit" class="btn btn1" value="Search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
