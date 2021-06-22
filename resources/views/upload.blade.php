@extends('layouts.main')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header " style="background-color: #00acc1;">
                            <h4 class="card-title " style="color: white">Upload Your Documents, clean and compare</h4>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <p>{{ Session::get('message') }}</p>
                    @endif

                    <div class="card">

                        <div class="card-icon">
                            <form method='post' action="{{ route('BCX-file-import') }}" enctype='multipart/form-data'>
                                @csrf
                                <i class="material-icons">upload</i>
                                <a class="btn btn-light disabled" href="">BCX FILE</a>
                                <input type='file' name='file'>
                                <input class="btn btn-primary btn-sm" type='submit' name='submit' value='Import'>
                                <a class="btn btn-success btn-sm" href="#">Reconcile</a>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                            <form method='post' action="{{ route('GL-file-import') }}" enctype='multipart/form-data'>
                                @csrf
                                <i class="material-icons">upload</i>
                                <a class="btn btn-light disabled" href="">GL FILE</a>
                                <input type='file' name='file'>
                                <input class="btn btn-primary btn-sm" type='submit' name='submit' value='Import'>
{{--                                <a class="btn btn-info btn-sm" href="{{ route('GL-file-export') }}">Export data</a>--}}
                            </form>
                        </div>


                    </div>
                    <br>

                    <a href="{{'transactions'}}">
                        <button class="btn btn-warning" style="margin-left: 80%">Complete</button>
                    </a>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
