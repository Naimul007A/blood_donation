@extends('admin.layouts.master')
@section('title')
    <title>Cities List : admin panel</title>
@endsection
@section('main')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cities List</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Cities List</li>
        </ol>
        <div>
            <div class="row">
                <div class="col-12 py-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Cities List</h5>
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm">Add City</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($Cities) > 0)
                                        @foreach ($Cities as $Citie)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $Citie->name }}</td>
                                                <td>
                                                    <a href="{{ route('profile.donor', $Citie->id) }}">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('before-body')
    <script>
        $(function() {
            $("#myTable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('.col-md-6:eq(0)');
        })
    </script>
@endsection
