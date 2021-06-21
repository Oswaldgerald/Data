@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info" style="background-color: #0c83e2">
                            <h4 class="card-title ">History</h4>
                            <p class="card-category"> Summary of all activities done by users</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        stan
                                    </th>
                                    <th>
                                        Card_no
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                    <th>
                                        Terminal_Id
                                    </th>
                                    <th>
                                        Charge
                                    </th>
                                    <th>
                                        Account_no
                                    </th>
                                    <th>
                                        rrn
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Models\BCX::all() as $bcx)
                                        <tr>
                                            <th>{{ $bcx->id}}</th>
                                            <th>{{ $bcx->stan}}</th>
                                            <th>{{ $bcx->Card_no}}</th>
                                            <th>{{ $bcx->Amount}}</th>
                                            <th>{{ $bcx->Terminal_id}}</th>
                                            <th>{{ $bcx->Charge}}</th>
                                            <th>{{ $bcx->Account_no}}</th>
                                            <th class="btn-outline-success">{{ $bcx->rrn}}</th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
