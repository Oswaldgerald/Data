@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-info" style="background-color: #0c83e2">
                <h4 class="card-title ">Transactions in BCX not in BR</h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>STAN</th>
                            <th>DATE</th>
                            <th>CARD NUMBER</th>
                            <th>TERMINAL ID</th>
                            <th>AMOUNT</th>
                            <th>CHARGE</th>
                            <th>ACCOUNT NUMBER</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>004962</td>
                            <td> Jun 18 2021 1:03PM</td>
                            <td>502933******9127</td>
                            <td> MKB00101</td>
                            <td>300,000</td>
                            <td>1,300.00</td>
                            <td> 00120101598801</td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
