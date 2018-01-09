@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Arena 2 - Comparison </div>

                <div class="panel-body">
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                    <h2>Comparison</h2>

                    <p style="font-size: 18px">
                    Di Python operator perbandingan bukan hanya sama dengan (==), tapi juga ada lebih dari (>), lebih dari atau sama dengan (>=), lebih kecil (<), lebih kecil atau sama dengan (<=), dan tidak sama dengan (!=).
                    <br>
                    <br>
                    Contoh :
                    <br>

                    <br>
                    >> 3 != 3
                    <br>
                    FALSE
                    <br>
                    >> 5 >= 4
                    <br>
                    TRUE
                    <br>
                    >> 10.2 < 10.5
                    <br>
                    TRUE 

                    </p> 



                    <br>
                    <br>
                    <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"><a href="{{ route('step1') }}" class="btn btn-primary">Kembali ke Jelajah</a></div>
                        <div class="col-md-6"><a href="{{ route('step1item2question1') }}" class="btn btn-success btn-block">Lanjutkan -></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
