@extends('layouts.main-layout')

@section('title')
    <title>
        {{ $match['team1'] }} - {{ $match['team2'] }}
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                <li>
                    {{ $match['team1'] }} - {{ $match['team2'] }}
                </li>
                <li>
                    {{ $match['point1'] }} - {{ $match['point2'] }}
                </li>
                <li>
                    {{ $match['result'] }}
                </li>
            </ul>
        </div>
    </main>
@endsection