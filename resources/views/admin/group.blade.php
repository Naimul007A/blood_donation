@extends('admin.layouts.master')
@section('title')
    <title>Donor List : admin panel</title>
@endsection
@section('main')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Group List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Group List</li>
        </ol>
        <div>
            <div class="row">
                <div class="col-12 py-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Group List</h5>
                                <a href="javascript:void(0)" id="addGroup" class="btn btn-primary btn-sm">Add Group</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#Serial</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($groups) > 0)
                                        @foreach ($groups as $group)
                                            <tr>
                                                <td>#{{ $loop->iteration }}</td>
                                                <td>{{ $group->name }}</td>
                                                <td>
                                                    <a href="Javascript:void(0)" id="editGroup"
                                                        data-id="{{ $group->id }}">Edit</a>
                                                    <a href="Javascript:void(0)" id="deleteGroup"
                                                        data-id="{{ $group->id }}">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3">
                                                <h5 class="alert alert-danger text-center">NO Data Found!</h5>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    add Group modal -->
    <div class="modal" id="addGroupModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="addGroupForm">
                        <div class="py-2">
                            <label for="group_name" class="form-label">Group Name :-</label>
                            <input type="text" name="group_name" id="group_name" class="form-control">
                            <div class="invalid-feedback">
                                Filed Required
                            </div>
                        </div>
                        <div class="py-2">
                            <input class="btn btn-info" type="submit" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Group modal-->
    <div class="modal" id="editGroupModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="editGroupForm">
                        @method('PUT')
                        <div class="py-2">
                            <label for="up_group_name" class="form-label">Group Name :-</label>
                            <input type="text" name="up_group_name" id="up_group_name" class="form-control">
                            <input type="hidden" id="up_group_id">
                            <div class="invalid-feedback">
                                Filed Required
                            </div>
                        </div>
                        <div class="py-2">
                            <input class="btn btn-info" type="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('before-body')
@endsection
