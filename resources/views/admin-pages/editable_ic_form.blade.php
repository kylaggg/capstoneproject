@extends('layout.master')

@section('title')
    <h1>Editable Internal Customer Form</h1>
@endsection

@section('content')
    <div class="content-container">
        <h2>Dear Adamson Employee,</h2>
        <p>Each department (co-academic offices) wants to know how well we are serving our employees/ internal customers. We
            appreciate if you would take the time to complete this evaluation. This is a feedback mechanism to improve our
            services. Your answers will be treated with utmost confidentiality.</p>
        <p>Your opinion matters. We welcome your comments and suggestions. Please answer the questions by selecting one
            option from the provided choices using the radio buttons. To select an option, click on the circle next to the
            answer that best fits your response. Only one option can be selected for each question. This will make us aware
            of a problem, complaints, or an opportunity to make a suggestion, and to recognize or commend for a job well
            done.</p>
        <p>Given the following behavioral competencies, you are to assess the incumbent's performance using the scale.
            Choose each number which corresponds to your answer for each item. Please answer each item truthfully.<br>
            5 - Almost Always 4 - Frequently 3 - Sometimes 2 - Occasionally 1 - Hardly Ever</p>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th class='small-column'>#</th>
                    <th>Question</th>
                    <th class='small-column'>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data ng Editable Internal Customer Form -->
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary">Add Question</button>
        </div>

        <p>What did you like best about his/her customer service?</p>
        <textarea></textarea>

        <p>Other comments and suggestions:</p>
        <textarea></textarea>
    </div>
@endsection
