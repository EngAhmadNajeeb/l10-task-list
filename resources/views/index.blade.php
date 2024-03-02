@extends('layouts.app')

@section('title', 'The List of Task')
@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse  ($tasks as $task)
        <a href="{{ route('task.show', ['task' => $task->id]) }}">
            <li>{{ $task->title }}</li>
        </a>

    @empty
        <p>There are no tasks!</p>
    @endforelse
    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
