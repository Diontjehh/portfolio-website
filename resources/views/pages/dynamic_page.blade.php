@extends('layout')

@section('content')

    <x-page-header :page="$page" />

    <x-dynamic-components :page="$page" />

@endsection