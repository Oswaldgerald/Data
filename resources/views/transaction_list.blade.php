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
                        <tr>
                            <th>ROUNDS</th>
                            <th>DATE</th>
                            <th>TOTAL SETTLEMENT</th>
                            <th>IN BCX NOT BR</th>
                            <th>IN BR NOT BCX</th>
                            <th>ACTIONS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> 1</td>
                            <td> 27.05.2021</td>
                            <td><a href="{{'/totalSettlement'}}"><span class="label bg-brown"> 100 </span> | <span
                                        class="label bg-brown"> 400,000,000 </span></a></td>

                            <td><a href="{{'/bcxNotBr'}}"><span class="label bg-danger"> 10 </span> | <span
                                        class="label bg-danger"> 400,000 </span></a></td>

                            <td><a href="{{'/brNotBcx'}}"><span class="label bg-orange">  8 </span> | <span
                                        class="label bg-orange">  60,000,000 </span></a></td>

                            <td><span class="label bg-green"> <a href="{{'/'}}">redo</a></span> <span
                                    class="label bg-blue"> <a href="{{'/'}}">export</a></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
