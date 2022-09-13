@extends('layouts.app')

@section('content')
    <h1>SAMPLE PAGE</h1>
    <x-Sample.component title="サンプルコンポーネント">
        <x-slot name="contents">
            コンテンツ
        </x-slot>
    </x-Sample.component>
@endsection

