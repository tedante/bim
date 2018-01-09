@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pertanyaan</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('pertanyaanCreate') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Text</th>
                                {{-- <th scope="col">Poin</th> --}}
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($questions) > 0)
                        <?php $i=1; ?>
                            @foreach ($questions as $question)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{ $question->question_text }}</td>
                                <td><a href="#" class="btn btn-primary">Ubah</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">Data Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
