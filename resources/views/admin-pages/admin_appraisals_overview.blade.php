@extends('layout.master')

@section('title')
<h1>Appraisals Overview</h1>
@endsection

@section('content')
    <div class="content-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Immediate Superior</th>
                    <th>Internal Customer 1</th>
                    <th>Internal Customer 2</th>
                    <th>Status</th>
                    <th>Signatures</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection