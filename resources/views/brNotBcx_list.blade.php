@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-info" style="background-color: #0c83e2">
                <h4 class="card-title ">Transactions in BR not in BCX</h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>OPERATOR ID</th>
                            <th>TRX DATE</th>
                            <th>TRX DESCRIPTION</th>
                            <th>CREDIT AMOUNT</th>
                            <th>DEBIT AMOUNT</th>
                            <th>CLOSING BALANCE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> MKB00101</td>
                            <td> Jun 18 2021 1:03PM</td>
                            <td> ATM CASH WITHDRAWAL - 00120101598801-Jun 18 2021 1:03PM Reference No 004962</td>
                            <td>300,000</td>
                            <td>0.00</td>
                            <td>8,350,000</td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
