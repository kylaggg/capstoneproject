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
                <th>Self-Evaluation</th>
                <th>Internal Customer 1</th>
                <th>Internal Customer 2</th>
                <th>Immediate Superior</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="{{route('viewSelfEvaluationForm')}}" class="btn btn-outline-primary full-width" role="button">Self-Appraise</a>
                </td>
                <td>
                    <a href="#" class="btn btn-outline-primary full-width" role="button">View</a>
                </td>
                <td>
                    <a href="#" class="btn btn-outline-primary full-width" role="button">View</a>
                </td>
                <td>
                    <a href="#" class="btn btn-outline-primary full-width" role="button">View</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection
