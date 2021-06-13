@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{route('CL-BCX-file-import')}}" role="button">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <p class="card-category"></p>
                                <h3 class="card-title">Upload
                                    <small> </small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">warning</i> Pending
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ 'transactions'}}" role="button">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">subtitles</i>
                                </div>
                                <p class="card-category"></p>
                                <h3 class="card-title">Transact</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ ''}}" role="button">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category"></p>
                                <h3 class="card-title">Reports</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> reconcile
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ 'history'}}" role="button">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">
                                        event_busy </i>
                                </div>
                                <p class="card-category"></p>
                                <h3 class="card-title">History</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
