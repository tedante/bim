@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Level 1 : Introduction </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 1
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Boolean</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item1') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 2
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Comparison</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item2') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Level 2 : If </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 1
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">If Statement</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item3') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 2
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">If Statement ke 2</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item3') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Level 3 : If Else </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 1
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">If Else</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item3') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Arena 2
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">If Else Bersarang</h5>
                                    {{-- <p class="card-text">Tipe data yang sangat berguna pada struktur percabangan</p> --}}
                                    <a href="{{ route('step1item3') }}" class="btn btn-primary">Let's Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</div>
@endsection
