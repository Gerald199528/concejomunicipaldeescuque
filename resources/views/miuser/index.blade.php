@extends('layouts.app')
@section('title')
@section('container')
@include('miuser.alertas.sweetalert')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('miuser.form.form')
    @include('miuser.form.changePassword')
   


@endsection
