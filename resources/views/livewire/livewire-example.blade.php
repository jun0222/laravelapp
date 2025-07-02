@extends('layouts.app')

@section('content')
    <p>Livewire Example Component</p>
    <!-- Livewireコンポーネントの呼び出し -->
    <livewire:good-afternoon-component />

    <!-- コンポーネントからのメッセージ表示 -->
    <p>{{ $message }}</p>

    <!-- レンダリングで渡された値の表示 -->
    <p>{{ $msg }}</p>
@endsection
