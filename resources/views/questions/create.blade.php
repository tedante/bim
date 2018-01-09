@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{-- {!! Form::open(['method' => 'POST', 'route' => ['users.store']]) !!} --}}
            <form method="POST" action="{{ url('/pertanyaan') }}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Text</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <textarea name="question_text" old='text' class="form-control" placeholder=""></textarea>
                                <p class="help-block"></p>
                                @if($errors->has('text'))
                                <p class="help-block">
                                    {{ $errors->first('text') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Option #1</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <input type="text" name="option1" old='option1' class="form-control" placeholder="">
                                <p class="help-block"></p>
                                @if($errors->has('option1'))
                                <p class="help-block">
                                    {{ $errors->first('option1') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Option #2</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <input type="text" name="option2" old='option2' class="form-control" placeholder="">
                                <p class="help-block"></p>
                                @if($errors->has('option2'))
                                <p class="help-block">
                                    {{ $errors->first('option2') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Option #3</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <input type="text" name="option3" old='option3' class="form-control" placeholder="">
                                <p class="help-block"></p>
                                @if($errors->has('option3'))
                                <p class="help-block">
                                    {{ $errors->first('option3') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Option #4</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <input type="text" name="option4" old='option4' class="form-control" placeholder="">
                                <p class="help-block"></p>
                                @if($errors->has('option4'))
                                <p class="help-block">
                                    {{ $errors->first('option4') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <label class="control-label">Option #5</label>
                                {{-- {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!} --}}
                                <input type="text" name="option5" old='option5' class="form-control" placeholder="">
                                <p class="help-block"></p>
                                @if($errors->has('option5'))
                                <p class="help-block">
                                    {{ $errors->first('option5') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {{-- {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!} --}}
                                <div class="control-label">
                                    <label for="sel1">Correct</label>
                                    <select class="form-control" id="sel1" name="correct">
                                        <option selected disabled>---</option>
                                        @foreach($correct_options as $correct_option)
                                        <option value="{{$correct_option}}">{{ $correct_option }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                <p class="help-block"></p>
                                @if($errors->has('correct'))
                                <p class="help-block">
                                    {{ $errors->first('correct') }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                <input type="submit" name="save" class="btn btn-danger" value="Save">
                            </div>
                        </div>            
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection