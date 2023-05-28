<link rel="stylesheet" href="{{ asset('employee_table.css') }}">

@extends('layout.master')

@section('title')
    <h1>Employees Accounts</h1>
@endsection

@section('content')
    <div class="content-container">
        <div class="input-group mb-3 search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-outline-secondary" type="button">
                <i class='bx bx-search'></i>
            </button>
        </div>
        <table class="table" id="employee_table">
            <thead>
                <tr>
                    <th scope="col" class="large-column">Employee # | Email</th>
                    <th scope="col" class="medium-column">First Name</th>
                    <th scope="col" class="medium-column">Last Name</th>
                    <th scope="col" class="large-column">Default Password</th>
                    <th scope="col" class="small-column">Type</th>
                    <th scope="col" class="large-column">Department</th>
                    <th scope="col" class="small-column">Status</th>
                    <th scope="col" class="medium-column">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr id={{ $account->account_id }}>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->employee->first_name }}</td>
                        <td>{{ $account->employee->last_name }}</td>
                        <td>{{ $account->default_password }}</td>
                        <td>{{ $account->type }}</td>
                        <td>{{ $account->employee->department_id }}</td>
                        <td>{{ $account->status }}</td>
                        <td>
                            @if ($account->status == 'active')
                                <button type="button" class="btn btn-outline-danger">Deactivate</button>
                            @else
                                <button type="button" class="btn btn-outline-danger">Activate</button>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class='d-flex justify-content-end gap-3 mt-2'>
            <input class="form-control large-column" type="file">
            <button class="btn btn-primary large-column">Upload Excel</button>
        </div>
        <div class='d-flex justify-content-end'>
            <button class="btn btn-primary large-column mt-2" type="button" data-bs-toggle="modal"
                data-bs-target="#addUserModal">Add User</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Adamson Email:</label>
                            <input type="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="mb-2">
                            <label>Employee Number:</label>
                            <input type="number" class="form-control" value="{{ old('employee_number') }}">
                        </div>
                        <div class="mb-2">
                            <label>First Name:</label>
                            <input type="text" class="form-control" value="{{ old('first_name') }}">
                        </div>
                        <div class="mb-2">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" value="{{ old('last_name') }}">
                        </div>
                        <div class="mb-2">
                            <label>Type (User Level):</label>
                            <select class="form-control">
                                <option value="" selected>
                                    Select Type</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Department:</label>
                            <select class="form-control">
                                <option value="" selected>Select Department</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
