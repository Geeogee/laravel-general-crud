@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($matches as $match)
                <ul>
                    <li>
                        <a href="{{ route('show', $match -> id) }}">
                            {{ $match['team1'] }} - {{ $match['team2'] }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('edit', $match -> id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('delete', $match -> id)}}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </li>
                </ul>
                    
                @endforeach
            </ul>
        </div>
    </main>
@endsection