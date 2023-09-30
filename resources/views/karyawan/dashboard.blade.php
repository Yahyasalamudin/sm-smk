@php
    $role = ucfirst($role);
@endphp
@extends('layouts.app')
@section('heading', "Dashboard {$role}")
@section('page')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">{{ $role }}</li>
@endsection
@section('content')
    <h1>
        {{ $role }}
    </h1>
@endsection
