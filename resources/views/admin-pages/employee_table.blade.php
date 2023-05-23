<link rel="stylesheet" href="{{ asset('employee_table.css') }}">

@extends('layout.master')

@section('title')
    <h1>Employees Accounts</h1>
@endsection

@section('content')
    <div class="content-container">
        <div class="input-group mb-3" id="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-outline-secondary" type="button">
                <i class='bx bx-search'></i>
            </button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="large-column">Employee # | Email</th>
                    <th scope="col" class="medium-column">First Name</th>
                    <th scope="col" class="medium-column">Last Name</th>
                    <th scope="col" class="large-column">Default Password</th>
                    <th scope="col" class="small-column">Type</th>
                    <th scope="col" class="large-column">Department</th>
                    <th scope="col" class="medium-column">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data -->
            </tbody>
        </table>
    </div>
@endsection
