@extends('layouts.main-layout')

@section('title')
    <title>
        Update {{ $match['id'] }}
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <form method="POST" action="{{ route('update', $match -> id) }}">

                @csrf
                @method('POST')

                <div class="wrapper-field">
                    <label for="team1">Team 1: </label>
                    <input type="text" id="team1" name="team1" value="{{ $match -> team1 }}">
                </div>
                <div class="wrapper-field">
                    <label for="team2">Team 2: </label>
                    <input type="text" id="team2" name="team2"  value="{{ $match -> team2 }}">
                </div>
                <div class="wrapper-field">
                    <label for="point1">Point Team 1: </label>
                    <input min="0" max="10" type="number" id="point1" name="point1"  value="{{ $match -> point1 }}">
                </div>
                <div class="wrapper-field">
                    <label for="point2">Point Team 2: </label>
                    <input min="0" max="10" type="number" id="point2" name="point2"  value="{{ $match -> point2 }}"> 
                </div>
                <div class="wrapper-field">
                    <label for="result">Result </label>
                    <select id="result" name="result">
                        <option value="0" @if ($match -> result == 0) selected @endif>Team 1</option>
                        <option value="1" @if ($match -> result == 1) selected @endif>Team 2</option>
                    </select>
                </div>
                <button type="submit">
                    Update
                </button>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>
@endsection