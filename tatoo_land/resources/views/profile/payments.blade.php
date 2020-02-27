@extends('profile.app')
@section('profile')
    <main class="content">
        <h5>Payments</h5>
        <hr>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Reference</th>
                <th>Description</th>
                <th class="text-right">Amount</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="5"></th>
                <th class="text-right">0.00</th>
            </tr>
            </tfoot>
        </table>
    </main>
@endsection