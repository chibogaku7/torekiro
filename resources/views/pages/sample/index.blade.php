@extends('layouts.app')

@section('content')
    <h1>SAMPLE PAGE</h1>
    <x-sample.component title="サンプルコンポーネント">
        <x-slot name="contents">
            コンテンツ
        </x-slot>
    </x-sample.component>
@endsection

