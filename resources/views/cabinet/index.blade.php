@extends('layouts.app')

@section('content')
    <h1>История</h1>
    <div class="admin-messages">
        @forelse(Auth::user()->messages()->latest()->get() as $message)
            <x-admin-message-item :message="$message"></x-admin-message-item>
        @empty
            Сообщений нет
        @endforelse
    </div>
@endsection
