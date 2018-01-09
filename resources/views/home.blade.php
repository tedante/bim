@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat datang di Branching Media</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Hello, {{ Auth::user()->name }}</h3><br><br>

                    <p style="text-align: justify; font-size: 17px">
                    Kamu sekarang ada di website Branching Media. Ini adalah media yang membantu kamu untuk menjelajahi dan memahami struktur algoritma percabangan.
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-md-6"><a href="{{ route('step1') }}" class="btn btn-primary btn-block">Jelajah</a></div>
                        <div class="col-md-6"><a href="{{ url('/challenge') }}" class="btn btn-primary btn-block">Tantangan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
