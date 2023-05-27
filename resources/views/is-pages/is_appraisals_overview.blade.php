@extends('layout.master')

@section('title')
    <h1>Appraisals Overview</h1>
@endsection

@section('content')
    <div class='d-flex gap-3'>
        <div class="content-container text-middle">
            <h4>School Year:</h4>
        </div>
        <div class="content-container text-middle">
            <h4>KRA Encoding:</h4>
        </div>
        <div class="content-container text-middle">
            <h4>Performance Review:</h4>
        </div>
        <div class="content-container text-middle">
            <h4>Evaluation:</h4>
        </div>
    </div>

    <div class="content-container">
        <table class='table'>
            <thead>
                <tr>
                    <th class='large-column'>Name</th>
                    <th class='medium-column'>Self-Evaluation</th>
                    <th>Internal Customer 1</th>
                    <th>Internal Customer 2</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data -->
            </tbody>
        </table>
    </div>
@endsection
