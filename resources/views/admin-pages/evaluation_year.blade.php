@extends('layout.master')

@section('title')
    <h1>Evaluation Years</h1>
@endsection

@section('content')
    <div class="content-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class='small-column'>#</th>
                    <th class='medium-column'>School Year</th>
                    <th class='medium-column'>KRA Starting Date</th>
                    <th class='medium-column'>KRA Ending Date</th>
                    <th class='medium-column'>Employee Starting Date</th>
                    <th class='medium-column'>Employee Ending Date</th>
                    <th class='small-column'>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data ng Eval Years -->
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#startNewEvalYear">Start
                New Evaluation Year</button>
        </div>

        <!-- New Eval Year Modal -->
        <div class="modal fade" id="startNewEvalYear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Start New Evaluation Year</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <p>Fill up the following information to start a new evaluation year:</p>

                            <label><h6>School Year:</h6></label>
                            <div class="row">
                                <div class="col">
                                    <label>Start Date:</label>
                                </div>
                                <div class="col">
                                    <label>End Date:</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                            </div>

                            <label><h6>KRA Encoding:</h6></label>
                            <div class="row">
                                <div class="col">
                                    <label>Start Date:</label>
                                </div>
                                <div class="col">
                                    <label>End Date:</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                            </div>

                            <label><h6>Performance Review:</h6></label>
                            <div class="row">
                                <div class="col">
                                    <label>Start Date:</label>
                                </div>
                                <div class="col">
                                    <label>End Date:</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                            </div>

                            <label><h6>Evaluation:</h6></label>
                            <div class="row">
                                <div class="col">
                                    <label>Start Date:</label>
                                </div>
                                <div class="col">
                                    <label>End Date:</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                                <div class="col">
                                    <input class='form-control' type='date' placeholder="starting date">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script></script>
@endsection
