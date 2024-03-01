@extends('layouts.app')

@section('title', 'The List of Task')
@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse  ($taskss as $task)
        <a href="{{ route('task.show', ['task' => $task->id]) }}">
            <li>{{ $task->title }}</li>
        </a>

    @empty
        <p>There are no tasks!</p>
    @endforelse
    {{-- @else
    <div>there are no tasks!</div> --}}
    {{-- @endif --}}
@endsection
