@extends('Admin.Layouts.app')
@section('title', 'Admin Dashboard')
@section("content")
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Welcome, {{ $admin->name }}!</h4>

            <div class="row">
                <div class="col-md-6">
                    <h5>Admin Details</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $admin->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $admin->email }}</li>
                        <li class="list-group-item"><strong>Created At:</strong> {{ $admin->created_at->format('d M Y') }}</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h5>Actions</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#" class="btn btn-info btn-block">Manage Users</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-warning btn-block">View Reports</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-success btn-block">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')

@endpush

@push('script')

@endpush