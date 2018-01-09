@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Arena 1 - Boolean </div>

                <div class="panel-body">
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                    <h2>Boolean</h2>

                    <p style="font-size: 18px">
                    Boolean adalah salah satu tipe data yang ada pada bahasa pemrograman Python. Di dalam Boolean hanya dua kemungkinan nilai yaitu TRUE atau FALSE. Boolean dibuat oleh sebuah proses perbandingan.
                    <br>
                    <br>
                    Contoh :
                    <br>
                    <br>

                    <span style="color: silver;">
                        // dibawah adalah contoh variable yang bertipe data boolean dan bernilai TRUE
                    </span>
                    <br>
                    >> my_boolean = TRUE

                    <br>
                    <br>
                    <span style="color: silver;">
                        // dibawah adalah contoh perbandingan antara dua nilai yang hasilnya Boolean
                    </span>
                    <br>
                    >> 5 == 4
                    <br>
                    FALSE
                    <br>
                    >> "Hello" == "Hello"
                    <br>
                    TRUE 

                    </p> 



                    <br>
                    <br>
                    <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"><a href="{{ route('step1') }}" class="btn btn-primary">Kembali ke Jelajah</a></div>
                        <div class="col-md-6"><a href="{{ route('step1item1question1') }}" class="btn btn-success btn-block">Lanjutkan -></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
