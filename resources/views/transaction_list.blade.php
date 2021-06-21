@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-info" style="background-color: #0c83e2">
                <h4 class="card-title ">Transactions</h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>
                            Round
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Total settlement
                        </th>
                        <th>
                            In BCX not GL
                        </th>
                        <th>
                            In GL not BCX
                        </th>
                        <th style="text-align: match-parent">
                            Action
                        </th>

                        <th>

                        </th>

                        </thead>
                        <tbody>

                        <tr>
                            <td style="text-align: center">
                                1
                            </td>
                            <td>
                                27.05.2021
                            </td>
                            <td>
                                100 | 400,000,000

                            </td>
                            <td><button class="btn btn-outline-warning btn-sm">10</button>|<button class="btn btn-outline-success btn-sm">4,000,000 </button>
                            </td>
                            <td>
                                <button class="btn btn-outline-warning btn-sm">8 </button>|<button class="btn btn-outline-warning btn-sm">6,000,000 </button>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    redo
                                </button>
                                <button class="btn btn-success btn-sm">
                                    export
                                </button>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
