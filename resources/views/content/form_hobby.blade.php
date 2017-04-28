@extends('main')

@section('title', trans('app.form_hobby'))



@section('content')

    @if(isset($name))
        <div>Pomėgis sukurtas sėkmingai: {{$name}}</div>
        @endif



    {!! Form::open(['url' => route('create.hobbies')]) !!}

        {{Form::label('hobby', 'Hobby')}}
        {{Form::text('hobby')}}
        {{Form::submit('Add hobby!')}}

    {!! Form::close() !!}

@endsection

