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
                                    <?php
                                    use App\Models\b_c_x_e_s;
                                    use App\Models\GeneralLedger;
                                    $bcxes = b_c_x_e_s::get();
                                    $total_amount = 0;
                                    ?>
                                    @foreach ($bcxes as $bcx1)
                                        <?php
                                        $general = GeneralLedger::where('trxDescription', 'LIKE', '%' . $bcx1->stan . '%')->get();
                                        ?>
                                        @foreach($general as $bcx )
                                            <?php $total_amount += $bcx1->Amount; ?>
                                            <tr>
                                                <th>{{ $bcx->id}}</th>
                                                <th>{{ $bcx->trxDescription}}</th>
                                                <th>{{ $total_amount}}</th>

                                            </tr>

                                        @endforeach

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
