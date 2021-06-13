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
                                        Activity
                                    </th>
                                    <th>
                                        Done by
                                    </th>
                                    <th>
                                        Date Time Logged
                                    </th>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Sheet 1 Upload
                                        </td>
                                        <td>
                                            Oswald John
                                        </td>
                                        <td>
                                            Fri, 16 May 2015 05:50:06 GMT
                                        </td>
                                    </tr>
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
