@extends('profile.app')
@section('profile')
    <main class="content">
        <table class="table">
            <thead>
            <tr>
                <th>Bank</th>
                <th>Product</th>
                <th>Credit Type</th>
                <th>Period</th>
                <th>Status</th>
                <th>Amount</th>
            </tr>
            </thead>
        </table>

        <br>
        <form action="{{url("profile/password")}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <h5>Trade Finance</h5>
                    <p class="text-muted">Application form</p>
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Bank</label>
                <div class="col-md-6">
                    <input placeholder="Bank name">
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Select Product</label>
                <div class="col-md-6">
                    <select>
                        <option>Letter of credit</option>
                        <option>Bank Guarantee</option>
                    </select>
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Amount</label>
                <div class="col-md-6">
                    <input placeholder="Amount">
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Credit Type</label>
                <div class="col-md-6">
                    <input placeholder="Amount">
                </div>
            </div>

            <div class=" form-group row">
                <label class="col-md-3 col-form-label text-md-right">Repayment Period</label>
                <div class="col-md-6">
                    <select>
                        <option v-for="i in 24">@{{ i }} months</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-md-6">
                    <button class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>

    </main>
@endsection