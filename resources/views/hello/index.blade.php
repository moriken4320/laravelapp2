@extends('layouts.app')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文</p>
    <p>必要なだけ記述</p>
@endsection

@section('footer')
copyright 2020 tuya.
@endsection
