@extends('main')

@section('title', trans('app.form_city'))


@section('content')

    <form method="POST" action="{{route('create.cities')}}">
        City:<br>
        <input type="text" name="city" placeholder="write">
        <br>
        <input type="submit" value="Submit">

        {{csrf_field()}}

    </form>

@endsection

