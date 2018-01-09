@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Arena 1 - If Statement </div>

                <div class="panel-body">
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                    <h2>If Statement</h2>

                    <p style="font-size: 18px; text-align: justify;">
                    amu dapat menggunakan if statements untuk menjalankan kode jika kondisi terpenuhi. Jika ekspresi bernilai benar (True), suatu situasi akan dijalankan. sementara yang lainnya tidak dijalankan. Python uses indentation (white space at the beginning of a line) to delimit blocks of code. Other languages, such as C, use curly braces to accomplish this, but in Python indentation is mandatory; programs won't work without it. As you can see, the statements in the if should be indented.
                    <br>
                    Statement If yaitu:
                    <br>
                    <br>
                    Contoh :
                    <br>

                    <br>
                    if ekspresi/kondisi:
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;statement
                    <br>
                    <br>
                    if (2 == 2):
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;print "Ini angka 2"
                    </p> 



                    <br>
                    <br>
                    <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"><a href="{{ route('step1') }}" class="btn btn-primary">Kembali ke Jelajah</a></div>
                        <div class="col-md-6"><a href="{{ route('step1item3question1') }}" class="btn btn-success btn-block">Lanjutkan -></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
