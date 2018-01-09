@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tantangan Kuis </div>
                {{-- {{dd($paginator->perPage)}} --}}
                <div class="container">
                    <form class="form-horizontal" method="POST" action="{{ route('challengeStore') }}">
                        <?php $i=0;?>
                        {{ csrf_field() }}
                        @foreach($questions as $question) 
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="question_id[{{$i}}]" value="{{ $question->id }}">
                        <div class="form-group{{ $errors->has('nis') ? ' has-error' : '' }}">
                            <p style="font-size: 20px">{!! $question->question_text !!}</p>
                        </div>

                        @foreach($question->options as $option)
                        <input type="radio" name="option_id[{{$i}}]" value="{{ $option->id }}" style="font-size: 18px"> {{ $option->option }}
                        <br>
                        @endforeach

                        <br>
                        <br>
                        <?php $i++; ?>
                        @endforeach
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6"><button class="btn btn-success">Lanjutkan -></button></div>
                        </div>
                    </form>
                </div>
                <div class="panel-body">
                    <div class="container"> 
                        {{-- {!! $questions->render() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
